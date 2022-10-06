<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Faq;
use App\Models\Service;
use App\Models\ServiceApp;
use App\Models\ServiceBenefit;
use App\Models\ServiceExpertise;
use App\Models\ServiceFeature;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected ServiceRepository $serviecRequest;

    public function __construct(ServiceRepository $serviceReq)
    {
        $this->serviecRequest = $serviceReq;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->serviecRequest->dataTable();
        }
        $data['funinit'] = array('Service.initView()');
        return view('admin.service.index', $data);
    }

    public function create()
    {
        $data['funinit'] = array('Service.initAdd()');
        return view('admin.service.create', $data);
    }

    public function store(ServiceRequest $request)
    {
        $data = $this->serviecRequest->createService($request);
        if($data){
            return createBack();
        }else{
            errorBack();
        }

    }


    public function edit($id)
    {
        $data['service'] = Service::with('faqs', 'servicePoint', 'devPoint')->findorFail($id);
        $data['funinit'] = array('Service.initAdd()','Service.initEdit()');
        return view('admin.service.edit', $data);
    }

    public function update(ServiceRequest $request, $id)
    {
        $solution = $this->serviecRequest->updateService($id,$request);
        if($solution){
            return redirect()->route('admin.service.index')->with('success', 'Successfully Updated');
        }else{
            return redirect()->route('admin.service.index')->with('error','Something is wrong!!');
        }


    }

    public function destroy($id)
    {
        $service = $this->serviecRequest->startQuery()->findOrFail($id);
        $service->servicePoint->each->delete();
        $service->devPoint->each->delete();
        $service->faqs->each->delete();
        return  softDelete($service);
    }

    function status($id){
        $data =  $this->serviecRequest->startQuery()->findOrFail($id);
        return changeStatus($data);
    }
}
