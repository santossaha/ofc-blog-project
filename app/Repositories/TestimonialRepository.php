<?php

namespace App\Repositories;


use App\Models\Testimonial;
use Yajra\DataTables\Facades\DataTables;

class TestimonialRepository
{

    public function startQuery()
    {
        return Testimonial::query();
    }

    public function datatable(){
        return DataTables::of($this->startQuery()->latest()->select('id','name','status'))
            ->addIndexColumn()
            ->addColumn('status', function ($row) {
                $route = route('admin.testimonial.status', $row->id);
                return statusButton($row->status, $route);
            })
            ->addColumn('action', function ($row) {
                $route='testimonial';
                return editActionButton($row->id, $route).' '.deleteActionButton($row->id, $route);
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

    public function store($request){
        try {
            $input = $request->all();
            if (!Blank($request->image)) {
                $input['image'] = storeImage($request->image, 'testimonial');
            }
            $this->startQuery()->create($input);
        }catch (\Exception $e){
        return false;
        }
        return true;

    }

    public function updateVal($id,$request){
        try {
            $update = $this->startQuery()->findOrFail($id);
            $input = $request->all();
            if ($request->hasFile('image')) {
                deleteImage($update->image);
                $image = storeImage($request->image, 'testimonial');
                $input['image'] = $image;
            }
            $update->update($input);
        }catch (\Exception $e){
            return false;
        }
        return  true;
    }

}
