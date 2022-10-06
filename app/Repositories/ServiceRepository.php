<?php


namespace App\Repositories;


use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use App\Models\ServiceApp;
use App\Models\ServiceBenefit;
use App\Models\ServiceExpertise;
use App\Models\ServiceFeature;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Self_;
use Yajra\DataTables\Facades\DataTables;

class ServiceRepository
{

    protected const SERVICE = 'service';
    protected const SERVICE_APP = 'service_app';

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
        $service = $this->startQuery()->findOrFail($id);
        $service->servicePoint->each->delete();
        $service->devPoint->each->delete();
        $service->faqs->each->delete();
        $delVal =   softDelete($service);
        return $delVal;
    }

    public function dataTable(){
        return DataTables::of($this->startQuery()->latest()->select(['id', 'title', 'created_at','status']))
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

    public function createService($request){
        DB::beginTransaction();
        try {
        $input = $request->all();
        $portfolio = '';
        if(!blank($input['slug'])){
            $input['slug'] = slugify($input['slug']);
        }
        if($request->hasFile('image')){
            $input['about_image'] =   storeImage($request->image, 'service');
        }
        if($request->hasFile('app_process_image')){
            $input['app_process_image'] =   storeImage($request->app_process_image, 'service');
        }
        $service =  $this->startQuery()->create($input);
        $serviceId  = $service->id;
        $this->insertServicePoint($serviceId, $request);
        $this->insertAppDev($serviceId,$request);
        $this->insertFaq($serviceId,$request);
        DB::commit();
        } catch (\Exception $e) {;
            DB::rollback();
            return false;
        }
        return true;
    }

    public function insertServicePoint($id, $request){
        $mxVal = getRequestCount($request->s_title,$request->s_desription, $request->s_image);
        if ($mxVal >= 1) {
            for ($i = 0; $i < $mxVal; $i++) {
                if(isset($request->s_image[$i])){
                    $imageVal = storeImage($request->s_image[$i], 'service/service-point');
                    $ordName = $request->s_image[$i]->getClientOriginalName();
                }else{
                    $imageVal = '';
                    $ordName = '';
                }

                $arrTech = [
                    'service_id' => $id,
                    'title' => $request->s_title[$i] ?? '',
                    'description' => $request->s_description[$i] ?? '',
                    'type' => self::SERVICE,
                    'image' =>  $imageVal,
                    'alt_image' =>  $ordName,
                ];
                ServiceApp::create($arrTech);
            }
        }
    }

    public function insertAppDev($id,$request){
        $mxVal = getRequestCount($request->a_title,$request->a_description, $request->a_image);
        if ($mxVal >= 1) {
            for ($i = 0; $i < $mxVal; $i++) {
                if(isset($request->a_image[$i])){
                    $imageVal = storeImage($request->a_image[$i], 'service/app-dev');
                    $ordName = $request->s_image[$i]->getClientOriginalName();
                }else{
                    $imageVal = '';
                    $ordName = '';
                }
                $arrTech = [
                    'service_id' => $id,
                    'title' => $request->a_title[$i]?? '',
                    'description' => $request->a_description[$i]?? '',
                    'type' => self::SERVICE_APP,
                    'image' => $imageVal,
                    'alt_image' => $ordName,
                ];
                ServiceApp::create($arrTech);
            }
        }
    }

    public function insertFaq($id,$request){
        foreach (array_filter($request['faq_title']) as $key => $qtitle) {
            if (!empty($qtitle)) {
                $faq_data = [
                    'type_id' => $id,
                    'type' => self::SERVICE,
                    'question' => $qtitle,
                    'answer' => $request['faq_description'][$key],
                ];
                Faq::create($faq_data);
            }
        }
    }

    public function updateService($id,$request){
        DB::beginTransaction();
        try{
            $update =  $this->startQuery()->findOrFail($id);
            $input = $request->all();
            if(!blank($input['slug'])){
                $input['slug'] = slugify($input['slug']);
            }

            if ($request->hasFile('image')) {
                deleteImage($update->image);
                $input['about_image'] =   storeImage($request->image, 'service');
            }

            if ($request->hasFile('app_process_image')) {
                deleteImage($update->app_process_image);
                $input['app_process_image'] =   storeImage($request->app_process_image, 'service');
            }
            $update->update($input);
            $serviceID = $update->id;
            $this->updateServicePoint($serviceID,$request);
            $this->updateAppDev($serviceID,$request);
            $this->updateFaq($serviceID,$request);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return false;
        }
        return true;

    }

    public function updateServicePoint($id,$request){
        if(isset($request->service_id)){
            $delSer = ServiceApp::where('service_id',$id)->where('type',self::SERVICE)->whereNotIn('id',$request->service_id)->get();
            if(!$delSer->isEmpty()){
                foreach ($delSer as $ser){
                    deleteImage($ser->image);
                    $ser->delete();
                }
            }
        }

        //Update Service title description and image
        $mxVal = getRequestCount($request->s_title,$request->s_description, $request->s_image);
        if($mxVal >= 1){
            for ($i= 0; $i < $mxVal; $i++){
                if(!empty($request->service_id[$i])){
                    $objSol = ServiceApp::findOrFail($request->service_id[$i]);
                    $arrSol = [
                        'title' => $request->s_title[$i] ?? '',
                        'description' => $request->s_description[$i] ?? '',
                    ];
                    if(!empty($request->s_image[$i])){
                        deleteImage($objSol->image);
                        $arrSol['image'] = storeImage($request->s_image[$i],'technology/service');
                    }
                    $objSol->update($arrSol);
                }else{
                    $arrSol = [
                        'service_id' => $id,
                        'title' => $request->s_title[$i]?? '',
                        'description' => $request->s_description[$i]?? '',
                        'type' => self::SERVICE,
                    ];
                    if(!empty($request->s_image[$i])){
                        $arrSol['image'] = storeImage($request->s_image[$i], 'technology/service');
                    }
                    ServiceApp::create($arrSol);
                }
            }
        }
    }

    public function updateAppDev($id,$request){
        if(isset($request->app_development_id)){
            $delAppDev = ServiceApp::where('service_id',$id)->where('type',self::SERVICE_APP)->whereNotIn('id',$request->app_development_id)->get();
            if(!$delAppDev->isEmpty()){
                foreach ($delAppDev as $delApp){
                    deleteImage($delApp->image);
                    $delApp->delete();
                }
            }
        }

        //Update Service title description and image
        $mxVal = getRequestCount($request->a_title,$request->a_description, $request->a_image);
        if($mxVal >= 1){
            for ($i= 0; $i < $mxVal; $i++){
                if(!empty($request->app_development_id[$i])){
                    $objSol = ServiceApp::findOrFail($request->app_development_id[$i]);
                    $arrSol = [
                        'title' => $request->a_title[$i],
                        'description' => $request->a_description[$i],
                    ];
                    if(!empty($request->a_image[$i])){
                        deleteImage($objSol->image);
                        $arrSol['image'] = storeImage($request->a_image[$i],'technology/app-dev');
                    }
                    $objSol->update($arrSol);
                }else{
                    $arrSol = [
                        'service_id' => $id,
                        'title' => $request->a_title[$i],
                        'description' => $request->a_description[$i],
                        'type' => self::SERVICE_APP,
                    ];
                    if(!empty($request->a_image[$i])){
                        $arrSol['image'] = storeImage($request->a_image[$i], 'technology/app-dev');
                    }
                    ServiceApp::create($arrSol);
                }
            }
        }
    }

    public function updateFaq($id, $request){
        if(isset($request->faqs_id)){
            $dels =  Faq::where('type_id',$id)->where('type',self::SERVICE)->whereNotIn('id',$request->faqs_id)->get();
            if(!empty($dels)){
                foreach ($dels as $del){
                    $del->delete();
                }
            }
        }
        $faqCount = count($request->faq_title);
        if($faqCount >= 1){
            for ($i = 0; $i < $faqCount; $i++){
                if(!empty($request->faqs_id[$i])){
                    $objFaq = Faq::findOrFail($request->faqs_id[$i]);
                    $arrFaqs = [
                        'question' => $request->faq_title[$i],
                        'answer' => $request->faq_description[$i]?? '',
                    ];
                    $objFaq->update($arrFaqs);
                }else{
                    if(isset($request->faq_title[$i])){
                        Faq::create([
                            'type_id' => $id,
                            'type' => self::SERVICE,
                            'question' => $request->faq_title[$i],
                            'answer' => $request->faq_description[$i]?? '',
                        ]);
                    }
                }
            }
        }
    }




/*    public function getRequestCount($ti, $des,$img){
        $tVal = $ti ? count($ti) : 0;
        $dVal = $des ? count($des) : 0;
        $iVal = $img ? count($img) : 0;
        return  max([$tVal,$dVal,$iVal]);
    }*/


}
