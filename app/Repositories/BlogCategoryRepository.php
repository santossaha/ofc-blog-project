<?php


namespace App\Repositories;


use App\Models\BlogCategory;
use Yajra\DataTables\Facades\DataTables;

class BlogCategoryRepository
{
    public function startQuery()
    {
        return BlogCategory::query();
    }

    public function datatable(){
       // return $category = BlogCategory::select('id', 'name', 'slug','status')->get();
        return DataTables::of($this->startQuery())
            ->addIndexColumn()
            ->addColumn('status', function($row) {
                $route =route('admin.blog_category.status',$row->id);
                return statusButton($row->status,$route);
            })
            ->addColumn('action', function ($row) {
                $route='blog-category';
                return editActionButton($row->id, $route).' '.deleteActionButton($row->id, $route);
            })
            ->rawColumns(['action','status'])
            ->make(true);
    }

    public function status($id){
        $data = $this->startQuery()->find($id);
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
