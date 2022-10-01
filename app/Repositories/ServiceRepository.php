<?php


namespace App\Repositories;


use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use App\Models\ServiceApp;
use App\Models\ServiceBenefit;
use App\Models\ServiceExpertise;
use App\Models\ServiceFeature;
use Yajra\DataTables\Facades\DataTables;

class ServiceRepository
{

    public function startQuery()
    {
        return Service::query();
    }

    public function getServiceById($servId)
    {
        return Service::findOrFail($servId);
    }

    public function deleteService($servId)
    {
        Service::destroy($servId);
    }

    /*public function createService(array $pageDetails)
    {
        //return Page::create($pageDetails);
    }*/

    public function updateService($pageId, array $newDetails)
    {
        //return Page::whereId($pageId)->update($newDetails);
    }

    public function dataTable(){
        return DataTables::of($this->startQuery()->select(['id', 'title', 'home_description', 'created_at','status'])->get())
            ->addIndexColumn()
            ->addColumn('title', function($row) {
                return strlen($row->title) > 20 ? substr($row->title,0,20)."..." : $row->title;
            })
            ->addColumn('created_at', function($row) {
                return normalDateFormate($row->created_at);
            })
            ->addColumn('status', function($row) {
                $route =route('admin.service.status',$row->id);
                return statusButton($row->status,$route);
            })
            ->addColumn('action', function ($row) {
                $route='service';
                return editActionButton($row->id, $route).deleteActionButton($row->id, $route);
            })
            ->rawColumns(['action','status'])
            ->make(true);
    }

    public function status($pageId){
        $data =  $this->getServiceById($pageId);
        $status = ($data->status == 1) ? 0 : 1;
        $val = $data->update([
            'status' => $status
        ]);
        return $val;
    }

    public function createService($request,$icon,$about_image,$app_process_image){
     return  $this->startQuery()->create([
            'title' => $request->title,
            'slug' => $request->slug?slugify($request->slug):$request->slug,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'meta_robots' => $request->meta_robots,
            // 'app_dev_title' => $request->app_dev_title,
            'short_description' => $request->short_description,
            'home_description' => $request->home_description,
            'about_title' => $request->about_title,
            'about_description' => $request->about_description,
            'icon' => $icon,
            'icon_alt_tag' => $request->icon_alt_tag,
            'about_image' => $about_image,
            'image_alt_tag' => $request->image_alt_tag,
            'app_process_image' => $app_process_image,
            'image2_alt_tag' => $request->image2_alt_tag,
            "benefit_head_title" => $request->benefit_head_title,
            "benefit_head_description" => $request->benefit_head_description,
            "feature_head_title" => $request->feature_head_title,
            "hire_head_title" => $request->hire_head_title,
            "hire_head_description" => $request->hire_head_description,
        ]);


    }

    public function serviceBenefitQuery(){
       return ServiceBenefit::query();
    }
    public function serviceFeatureQuery(){
        return ServiceFeature::query();
    }
    public function serviceAppQuery(){
        return ServiceApp::query();
    }
    public function serviceExpertiseQuery(){
        return ServiceExpertise::query();
    }
    public function serviceFaqQuery(){
        return Faq::query();
    }

}
