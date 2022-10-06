<?php


namespace App\Repositories;


use App\Models\Faq;
use App\Models\Technology;
use App\Models\TechnologyApp;
use App\Models\TechnologyExpertise;
use Exception;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class TechnologyRepository
{
    protected const TECHNOLOGY_APP = 'technology_app';
    protected const TECHNOLOGY_SERVICE = 'technology_service';
    protected const TECHNOLOGY = 'technology';

    public function startQuery(){
       return Technology::query();
    }

    public function getRequestCount($ti, $des,$img){
        $tVal = $ti ? count($ti) : 0;
        $dVal = $des ? count($des) : 0;
        $iVal = $img ? count($img) : 0;
        return  max([$tVal,$dVal,$iVal]);
    }

    public function datatable(){
        return DataTables::of($this->startQuery()->latest()->select('id','title','short_description','created_at','status'))
            ->addIndexColumn()
            ->addColumn('created_at', function($row) {
                return date("Y-m-d H:i:s", strtotime($row->created_at));
            })
            ->addColumn('status', function($row) {
                $route =route('admin.technology.status',$row->id);
                return statusButton($row->status,$route);
            })
            ->addColumn('action', function ($row) {
                $route='technology';
                return editActionButton($row->id, $route).' '.deleteActionButton($row->id, $route);
            })
            ->rawColumns(['status','action'])
            ->make(true);
    }

    public function storageTech($request){
        DB::beginTransaction();
        try {
        $input = $request->all();
        if(!blank($request['slug'])){
            $input['slug'] = slugify($request['slug']);
        }

        $input['image'] = storeImage($request->image, 'technology/image');
        $input['about_image'] = storeImage($request->about_image, 'technology/about');

        $technology = $this->startQuery()->create($input);
        $technologyID = $technology->id;

        $this->insertServicePoint($technologyID,$request);
        $this->insertAppDev($technologyID,$request);
        $this->insertExpress($technologyID,$request);
        $this->insertFaq($technologyID,$request);
        DB::commit();
        } catch (Exception $e) {;
            DB::rollback();
            return false;
        }
        return true;

    }

    public function insertServicePoint($id, $request){
        //dd($request->all());
        $mxVal = getRequestCount($request->s_title,$request->s_desription, $request->s_image);
        if ($mxVal >= 1) {
            for ($i = 0; $i < $mxVal; $i++) {
                if(isset($request->s_image[$i])){
                    $imageVal = storeImage($request->s_image[$i], 'technology/service');
                }else{
                    $imageVal = '';
                }

                $arrTech = [
                    'technology_id' => $id,
                    'title' => $request->s_title[$i] ?? '',
                    'description' => $request->s_description[$i] ?? '',
                    'type' => TechnologyRepository::TECHNOLOGY_SERVICE,
                    'image' =>  $imageVal,
                ];
                TechnologyApp::create($arrTech);
            }
        }
    }

    public function insertAppDev($id,$request){
        $mxVal = getRequestCount($request->a_title,$request->a_description, $request->a_image);
        if ($mxVal >= 1) {
            for ($i = 0; $i < $mxVal; $i++) {
                if(isset($request->a_image[$i])){
                    $imageVal = storeImage($request->a_image[$i], 'technology/app-dev');
                }else{
                    $imageVal = '';
                }
                $arrTech = [
                    'technology_id' => $id,
                    'title' => $request->a_title[$i]?? '',
                    'description' => $request->a_description[$i]?? '',
                    'type' => self::TECHNOLOGY_APP,
                    'image' => $imageVal,
                ];
                TechnologyApp::create($arrTech);
            }
        }
    }

    public function insertExpress($id,$request){
        if($request->e_title){
            $mxVal = $request->e_title ? count($request->e_title) : 0;
            if ($mxVal >= 1) {
                for ($i = 0; $i < $mxVal; $i++) {
                    if(isset($request->e_image[$i])){
                        $imageVal = storeImage($request->e_image[$i], 'technology/express');
                    }else{
                        $imageVal = '';
                    }
                    $arrTech = [
                        'technology_id' => $id,
                        'title' => $request->e_title[$i]?? '',
                        'type' => self::TECHNOLOGY,
                        'image' =>  $imageVal,
                    ];
                    TechnologyExpertise::create($arrTech);
                }
            }
        }
    }

    public function insertFaq($id,$request){
        foreach (array_filter($request['faq_title']) as $key => $qtitle) {
            if (!empty($qtitle)) {
                $faq_data = [
                    'type_id' => $id,
                    'type' => TechnologyRepository::TECHNOLOGY,
                    'question' => $qtitle,
                    'answer' => $request['faq_description'][$key],
                ];
                Faq::create($faq_data);
            }
        }
    }

    public function updateTechnology($id,$request){
        DB::beginTransaction();
        try{
            $update =  $this->startQuery()->findOrFail($id);
            $input = $request->all();
            if(!blank($input['slug'])){
                $input['slug'] = slugify($input['slug']);
            }

            if ($request->hasFile('image')) {
                deleteImage($update->image);
                $input['image'] = storeImage($request->image, 'technology/image');
            }

            if ($request->hasFile('about_image')) {
                deleteImage($update->about_image);
                $input['about_image'] = storeImage($request->about_image, 'technology/about');
            }
            $update->update($input);
            $technologyID = $update->id;
            $this->updateServicePoint($technologyID,$request);
            $this->updateAppDev($technologyID,$request);
            $this->updateExpress($technologyID,$request);
            $this->updateFaq($technologyID,$request);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return false;
        }
        return true;

    }

    public function updateServicePoint($id,$request){

        if(isset($request->service_id)){
            $delSer = TechnologyApp::where('technology_id',$id)->where('type',self::TECHNOLOGY_SERVICE)->whereNotIn('id',$request->service_id)->get();
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
                    $objSol = TechnologyApp::findOrFail($request->service_id[$i]);
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
                        'technology_id' => $id,
                        'title' => $request->s_title[$i]?? '',
                        'description' => $request->s_description[$i]?? '',
                        'type' => self::TECHNOLOGY_SERVICE,
                    ];
                    if(!empty($request->s_image[$i])){
                        $arrSol['image'] = storeImage($request->s_image[$i], 'technology/service');
                    }
                    TechnologyApp::create($arrSol);
                }
            }
        }
    }

    public function updateAppDev($id,$request){
        if(isset($request->app_development_id)){
            $delAppDev = TechnologyApp::where('technology_id',$id)->where('type',self::TECHNOLOGY_APP)->whereNotIn('id',$request->app_development_id)->get();
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
                    $objSol = TechnologyApp::findOrFail($request->app_development_id[$i]);
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
                        'technology_id' => $id,
                        'title' => $request->a_title[$i],
                        'description' => $request->a_description[$i],
                        'type' => self::TECHNOLOGY_APP,
                    ];
                    if(!empty($request->a_image[$i])){
                        $arrSol['image'] = storeImage($request->a_image[$i], 'technology/app-dev');
                    }
                    TechnologyApp::create($arrSol);
                }
            }
        }
    }

    public function updateExpress($id,$request){
        if(isset($request->expertise_id)){
            $delAppDev = TechnologyExpertise::where('technology_id',$id)->whereNotIn('id',$request->expertise_id)->get();
            if(!$delAppDev->isEmpty()){
                foreach ($delAppDev as $delApp){
                    deleteImage($delApp->image);
                    $delApp->delete();
                }
            }
        }

        //Update Service title description and image
        $mxVal = $request->e_title ? count($request->e_title) : 0;
        //$dVal = $request->e_description ? count($request->e_description) : 0;
        //$mxVal =  max([$tVal,$dVal]);
        if($mxVal >= 1){
            for ($i= 0; $i < $mxVal; $i++){
                if(!empty($request->expertise_id[$i])){
                    $objSol = TechnologyExpertise::findOrFail($request->expertise_id[$i]);
                    $arrSol = [
                        'title' => $request->e_title[$i]?? '',
                        'description' => $request->e_description[$i]?? '',
                        'type' => self::TECHNOLOGY,
                    ];
                    if(!empty($request->e_image[$i])){
                        deleteImage($objSol->image);
                        $arrSol['image'] = storeImage($request->e_image[$i],'technology/express');
                    }
                    $val  = $objSol->update($arrSol);
                }else{
                    $arrSol = [
                        'technology_id' => $id,
                        'title' => $request->e_title[$i]?? '',
                        'description' => $request->e_description[$i]?? '',
                    ];
                    if(!empty($request->e_image[$i])){
                        $arrSol['image'] = storeImage($request->e_image[$i], 'technology/express');
                    }
                    TechnologyExpertise::create($arrSol);
                }
            }
        }
    }

    public function updateFaq($id, $request){
        if(isset($request->faqs_id)){
           $dels =  Faq::where('type_id',$id)->where('type',self::TECHNOLOGY)->whereNotIn('id',$request->faqs_id)->get();
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
                            'type' => self::TECHNOLOGY,
                            'question' => $request->faq_title[$i],
                            'answer' => $request->faq_description[$i]?? '',
                        ]);
                    }
                }
            }
        }
    }

}
