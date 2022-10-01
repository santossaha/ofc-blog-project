<?php


namespace App\Repositories;


use App\Models\Contact;
use Yajra\DataTables\Facades\DataTables;

class ContactRepository
{
    public function startQuery(){
        return Contact::query();
    }

    public function datatable(){
        return DataTables::of($this->startQuery()->latest()->select('id','name','email','phone','company_name','type','spam','created_at'))
            ->addIndexColumn()
            ->addColumn('created_at',function ($row){
                return normalDateFormate($row->created_at);
            })
            ->addColumn('spam', function ($row) {
                if (blank($row->spam)) {
                    return '-';
                }
                $name = ($row->spam == 1) ?  'Unblock' : 'Block';
                $color = ($row->spam == 1) ? 'primary' : 'danger';
                $route =route('admin.contact.spam',$row->id);
                $response =  '<a data-id="' . $route . '" href="javascript:"  class="status_change"><span class="kt-badge kt-badge--inline kt-badge--' . $color . '  primary">' . $name . '</span></a>';
                return $response;
            })
            ->addColumn('type', function ($row) {
                $name="Subscription";
                if($row->type==1){
                    $name="Normal";
                }
                return $name;
            })
            ->addColumn('action',function ($row){
                $route='contact';
                $btn = '<a href="' .route('admin.' . $route . '.show', $row->id) . '" data-id="' . $row->id . '" class="btn btn-primary btn-sm btn-icon" title="View"><i class="fa fa-file"></i></a>';
                $btn .= ' <a href="javascript:void(0)" data-delete-url-id="' . route('admin.' . $route . '.destroy', $row->id) . '" class="single-delete btn btn-danger btn-sm btn-icon" title="Delete"><i class="fa fa-trash"></i></a>';
                return $btn;
            })
            ->rawColumns(['action','created_at','spam','type'])
            ->make(true);
    }

    public function statusUpdate($id){
        try {
            $data =  $this->startQuery()->findOrFail($id);
            if (!blank($data)) {
                $status = ($data->spam == 1) ? 0 : 1;
                $data->update([
                    'spam' => $status
                ]);
            }
        }catch (\Exception $e){
            return false;
        }
        return true;
    }

}
