<?php


namespace App\Repositories;


use App\Models\PortfolioCategory;
use Yajra\DataTables\Facades\DataTables;

class PortfolioCatRepository
{
    public function startQuery(){
       return PortfolioCategory::query();
    }

    public function datatable(){
        return DataTables::of($this->startQuery()->select('id','name','sort_name','status')->orderBy('id','DESC'))
            ->addIndexColumn()
            ->addColumn('status', function($row) {
                $route =route('admin.portfolio-category.status',$row->id);
                return statusButton($row->status,$route);
            })
            ->addColumn('action', function ($row) {
                $route='portfolio-category';
                return editActionButton($row->id, $route).' '.deleteActionButton($row->id, $route);
            })
            ->rawColumns(['status','action'])
            ->make(true);
    }

    public function destroy($id){
       $data =  $this->startQuery()->findOrFail($id);
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
