<?php


namespace App\Repositories;


use App\Models\Page;
use Yajra\DataTables\Facades\DataTables;

class PageRepository
{

    public function startQuery()
    {
        return Page::query();
    }

    public function getPageById($pageId)
    {
        return Page::findOrFail($pageId);
    }

    public function deletePage($pageId)
    {
        Page::destroy($pageId);
    }

    public function createPage(array $pageDetails)
    {
        return Page::create($pageDetails);
    }

    public function updatePage($pageId, array $newDetails)
    {
        return Page::whereId($pageId)->update($newDetails);
    }

    public function dataTable(){
        return DataTables::of($this->startQuery()->latest())
            ->addIndexColumn()
            ->addColumn('created_at', function($row) {
                return date('d-m-Y',strtotime($row->created_at));
            })
            ->addColumn('status', function($row) {
                $route =route('admin.page.status',$row->id);
                return statusButton($row->status,$route);
            })
            ->addColumn('action', function ($row) {
                $route='page';
                return editActionButton($row->id, $route).' '.deleteActionButton($row->id, $route);
            })
            ->rawColumns(['action','status'])
            ->make(true);
    }

    public function status($pageId){
        $data =  $this->getPageById($pageId);
        $status = ($data->status == 1) ? 0 : 1;
        $val = $data->update([
            'status' => $status
        ]);
        return $val;
    }

}
