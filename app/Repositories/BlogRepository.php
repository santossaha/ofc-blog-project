<?php


namespace App\Repositories;


use App\Models\Blog;
use App\Models\BlogCategory;
use Yajra\DataTables\Facades\DataTables;

class BlogRepository
{
    public function startQuery()
    {
        return Blog::query();
    }
    public function datatable(){
        //$blog = Blog::with('categories')->select()->get();
        return DataTables::of($this->startQuery()->select('id', 'title', 'created_at','status'))
            ->addIndexColumn()
            ->addColumn('status', function($row) {
                $route =route('admin.blog.status',$row->id);
                return statusButton($row->status,$route);
            })
            ->addColumn('category', function ($row) {
                if (@$row->categories[0]->name) {
                    return $row->categories[0]->name;
                }
                return "-";
            })
            ->addColumn('created_at', function ($row) {
                return normalDateFormate($row->created_at);
            })
            ->addColumn('action', function ($row) {
                $route='blog';
                return editActionButton($row->id, $route).' '.deleteActionButton($row->id, $route);
            })
            ->rawColumns(['action','status'])
            ->make(true);
    }

    public function blogCatQuery(){
        return BlogCategory::query();
    }

    public function storeBlog($request){
        try {
            $input = $request->all();
            if(!blank($input['slug'])){
                $input['slug'] = slugify($input['slug']);
            }
            $image =  storeImage($request->image,'blog');
            $frontImg = storeImage($request->front_image,'blog/front');
            if(!empty($image)){
                $input['image'] = $image;
            }
            if(!empty($frontImg)){
                $input['front_image'] = $frontImg;
            }
            $blog = $this->startQuery()->create($input);
            if ($request->category_id) {
                $blog->categories()->sync($request->category_id);
            } else {
                $blog->categories()->sync();
            }
            return $blog;
        } catch (\Exception $e) {

            return $e->getMessage();
        }


    }

    public function updateBlog($request, $id){
        try {
            $input = $request->all();

            if(!blank($input['slug'])){
                $input['slug'] = slugify($input['slug']);
            }

            $blog  = $this->startQuery()->findOrFail($id);
            if(!empty($request->image)){
                deleteImage($blog->image);
                $input['image'] =  storeImage($request->image,'blog');
            }

            if(!empty($request->front_image)){
                deleteImage($blog->front_image);
                $input['front_image'] = storeImage($request->front_image,'blog/front');
            }
            $blog->update($input);
            if ($request->category_id) {
                $blog->categories()->sync($request->category_id);
            } else {
                $blog->categories()->sync();
            }
            return $blog;
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function softDelete($id){
        $data = $this->startQuery()->findOrFail($id);
        if (!empty($data)) {
            $data->delete();
            return \Response::json(message(200, 'Successful deleted'));
        }
        return \Response::json(message(400, "Something went wrong"));
    }

    public function status($id){
        $data = $this->startQuery()->findOrFail($id);
        $response = [];
        if (!blank($data)) {
            $status = ($data->status == 1) ? 0 : 1;
            $data->update([
                'status' => $status
            ]);
            $response = ['status' => true, "Message" => 'Status updated successfully', "data" => []];
        } else {
            $response = ['status' => false, "Message" => 'Record not found!', "data" => []];
        }
        return $response;
    }

}
