<?php


namespace App\Repositories;


use App\Models\Job;
use Yajra\DataTables\Facades\DataTables;

class JobRepository
{
    public function startQuery(){
        return Job::query();
    }

    public function datatable(){
        return DataTables::of($this->startQuery()->latest()->select(['id','name','experience','opening']))
            ->addIndexColumn()

            ->addColumn('action', function ($row) {
                $route='job-management';
                return editActionButton($row->id, $route).' '.deleteActionButton($row->id, $route);
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function storeJob($request){
        try {
            $this->startQuery()->create($request->all());
        }catch (\Exception $e){
            return false;
        }
        return true;
    }

    public function updateJob($request,$id){
        try {
            $update = $this->startQuery()->findOrFail($id);
            $update->update($request->All());
        }catch (\Exception $e){
            return false;
        }
        return true;
    }

}
