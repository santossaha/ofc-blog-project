<?php


namespace App\Http\Requests\Admin;


use App\Models\DevelopmentType;
use Yajra\DataTables\Facades\DataTables;

class DevTypeRepository
{
    public function startQuery(){
        return DevelopmentType::query();
    }

    public function datatable(){
        return DataTables::of($this->startQuery()->select(['id','name','status'])->latest())
            ->addIndexColumn()
            ->addColumn('status', function ($row){
                $route = route('admin.development-type.status',$row->id);
                return statusButton($row->status, $route);
            })
            ->addColumn('action', function ($row) {
                $route = 'development-type';
                return editActionButton($row->id, $route). ' '.deleteActionButton($row->id,$route);
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

    public function storeDev($request){
        try {
            $this->startQuery()->create($request->all());
        }catch (\Exception $e){
            return false;
        }
        return true;
    }

    public function updateDev($request,$id){
        try {
            $update = $this->startQuery()->findOrFail($id);
            $update->update($request->all());
        }catch (\Exception $e){
            return false;
        }
        return true;
    }






}
