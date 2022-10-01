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
            //$service = Service::select()->get();
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
        $icon =   storeImage($request->icon, 'service/icon');
        $about_image =   storeImage($request->about_image, 'service/about');
        $app_process_image =   storeImage($request->app_process_image, 'service');
        $service = $this->serviecRequest->createService($request,$icon,$about_image,$app_process_image);

        $serviceBenefitCount =  count($request->sb_title);
        if ($serviceBenefitCount >= 1) {
            for ($i = 0; $i < $serviceBenefitCount; $i++) {
                if(!blank($request->sb_title[$i])){
                    $this->serviecRequest->serviceBenefitQuery()->create(
                        [
                            'service_id' => $service->id,
                            'title' => $request->sb_title[$i] ?? '',
                            'description' => $request->sb_description[$i] ?? '',
                        ]
                    );
                }
            }
        }

        $serviceFeatureCount =  count($request->sf_title);
        if ($serviceFeatureCount >= 1) {
            for ($i = 0; $i < $serviceFeatureCount; $i++) {
                if(!blank($request->sf_title[$i])){

                    $arrFeatureService = [
                        'service_id' => $service->id,
                        'title' => $request->sf_title[$i] ?? '',
                        'alt_image' => $request->sf_alt_image[$i] ?? '',
                        'description' => $request->sf_description[$i] ?? '',
                    ];

                    if(!empty($request->sf_image[$i])){
                        $sf_image = storeImage($request->sf_image[$i], 'service/feature');
                        $arrFeatureService['image'] = $sf_image;
                    }
                    $this->serviecRequest->serviceFeatureQuery()->create($arrFeatureService);
                }
            }
        }

        $serviceAppCount =  count($request->s_title);
        if ($serviceAppCount >= 1) {
            for ($i = 0; $i < $serviceAppCount; $i++) {
                if(!blank($request->s_title[$i])){
                    $arrServiceApp = [
                        'service_id' => $service->id,
                        'type' => 'service',
                        'short_title' => $request->s_short_title[$i] ?? '',
                        'title' => $request->s_title[$i] ?? '',
                        'alt_image' => $request->s_alt_image[$i] ?? '',
                        'description' => $request->s_description[$i] ?? '',
                    ];

                    if(!empty($request->s_image[$i])){
                        $s_image = storeImage($request->s_image[$i], 'service/app');
                        $arrServiceApp['image'] = $s_image;
                    }
                    $this->serviecRequest->serviceAppQuery()->create($arrServiceApp);
                }
            }
        }

        $serviceExpertiseCount =  count($request->se_title);
        if ($serviceExpertiseCount >= 1) {
            for ($i = 0; $i < $serviceExpertiseCount; $i++) {
                if(!blank($request->se_title[$i])){

                    $arrServiceExpertise = [
                        'service_id' => $service->id,
                        'title' => $request->se_title[$i] ?? '',
                        'alt_image' => $request->se_alt_image[$i] ?? '',
                        'description' => $request->se_description[$i] ?? '',
                    ];

                    if(!empty($request->se_image[$i])){
                        $se_image =   storeImage($request->se_image[$i] ?? null, 'service/expertise');
                        $arrServiceExpertise['image'] = $se_image;
                    }
                    $this->serviecRequest->serviceExpertiseQuery()->create($arrServiceExpertise);
                }
            }
        }

        $faqCount =  count($request->faq_question);
        if ($faqCount >= 1) {
            for ($i = 0; $i < $faqCount; $i++) {
                $this->serviecRequest->serviceFaqQuery()->create([
                    'type_id' => $service->id,
                    'type' => 'service',
                    'question' => $request->faq_question[$i] ?? ' ',
                    'answer' => $request->faq_answer[$i] ?? ' '
                ]);
            }
        }

        return createBack();
    }


    public function edit($id)
    {
        $data['service'] = Service::with('faqs', 'serviceAppes', 'serviceFeatures', 'serviceExpertises', 'serviceBenefits')->findorFail($id);
        $data['funinit'] = array('Service.initAdd()','Service.initEdit()');
        return view('admin.service.edit', $data);
        // $service = Service::with('faqs', 'serviceAppes', 'serviceFeatures')->findorFail($id);
        // return view('admin.service.edit', compact('service'));
    }

    public function update(ServiceRequest $request, $id)
    {
        // dd($request->all());
        $service = $this->serviecRequest->getServiceById($id);

        $data = [
            'title' => $request->title,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'meta_robots' => $request->meta_robots,
            // 'app_dev_title' => $request->app_dev_title,
            'short_description' => $request->short_description,
            'home_description' => $request->home_description,
            'icon_alt_tag' => $request->icon_alt_tag,
            'image_alt_tag' => $request->image_alt_tag,
            'image2_alt_tag' => $request->image2_alt_tag,
            'about_title' => $request->about_title,
            'about_description' => $request->about_description,
            "benefit_head_title" => $request->benefit_head_title,
            "benefit_head_description" => $request->benefit_head_description,
            "feature_head_title" => $request->feature_head_title,
            "hire_head_title" => $request->hire_head_title,
            "hire_head_description" => $request->hire_head_description,
        ];

        if(!blank($request->slug)){
            $data['slug'] = slugify($request->slug);
        }

        if ($request->app_process_image) {
            deleteImage($service->app_process_image);
            $app_process_image = storeImage($request->app_process_image, 'service');
            $data['app_process_image'] = $app_process_image;
        }
        if ($request->icon) {
            deleteImage($service->icon);
            $icon = storeImage($request->icon, 'service/icon');
            $data['icon'] = $icon;
        }
        if ($request->about_image) {
            deleteImage($service->about_image);
            $about_image = storeImage($request->about_about_image, 'service/about');
            $data['about_image'] = $about_image;
        }

        $service->update($data);


        /*Delete services Benefit*/
        if(isset($request->benefit_id)){
            ServiceBenefit::where(['service_id' => $id])->whereNotIn('id', $request->benefit_id)->delete();
        }
        if(isset($request->sb_title)){
            $serviceBenefitCount =  count($request->sb_title);
            if ($serviceBenefitCount >= 1) {
                for ($i = 0; $i < $serviceBenefitCount; $i++) {
                    if(isset($request->sb_title[$i])){
                        $serviceBenefitData = [
                            'title' => $request->sb_title[$i] ?? '',
                            'description' => $request->sb_description[$i] ?? '',
                        ];

                        if (isset($request->benefit_id[$i])) {
                            $serviceappupdate = ServiceBenefit::findOrFail($request->benefit_id[$i]);
                            $serviceappupdate->update($serviceBenefitData);
                        } else {
                            $serviceBenefitData['service_id'] = $service->id;
                            ServiceBenefit::create($serviceBenefitData);
                        }
                    }
                }
            }
        }

        /*Delete services Expertise*/
        if(isset($request->expertise_id)){
            $deleteSFList = ServiceExpertise::where(['service_id' => $id])->whereNotIn('id', $request->expertise_id)->get();
            foreach($deleteSFList as $dsf) {
                deleteImage($dsf->image);
                $dsf->delete();
            }
        }
        if(isset($request->se_title)){
            $serviceExpertiseCount =  count($request->se_title);
            if ($serviceExpertiseCount >= 1) {
                for ($i = 0; $i < $serviceExpertiseCount; $i++) {
                    if(isset($request->se_title[$i])){
                        $serviceExpertiseData = [
                            'service_id' => $service->id,
                            'title' => $request->se_title[$i] ?? '',
                            'alt_image' => $request->se_alt_image[$i] ?? '',
                            'description' => $request->se_description[$i] ?? '',
                        ];

                        $se_image = null;
                        if (isset($request->se_image[$i])) {
                            $se_image = storeImage($request->se_image[$i], 'service/expertise');
                            $serviceExpertiseData['image'] = $se_image;
                        }

                        if (isset($request->expertise_id[$i])) {
                            $serviceappupdate = ServiceExpertise::findOrFail($request->expertise_id[$i]);
                            if (!blank($se_image)) {
                                deleteImage($serviceappupdate->image);
                                $serviceExpertiseData['image'] = $se_image;
                            }
                            $serviceappupdate->update($serviceExpertiseData);
                        } else {
                            ServiceExpertise::create($serviceExpertiseData);
                        }
                    }
                }
            }
        }

        /*Delete services Solution*/
        if(isset($request->service_app_id)){
            ServiceApp::where(['service_id' => $id, 'type' => 'service'])->whereNotIn('id', $request->service_app_id)->delete();
        }
        if(isset($request->s_title)){
            $serviceAppCount =  count($request->s_title);
            if ($serviceAppCount >= 1) {
                for ($i = 0; $i < $serviceAppCount; $i++) {
                    $serviceAppData = [
                        'service_id' => $service->id,
                        'type' => 'service',
                        'short_title' => $request->s_short_title[$i] ?? '',
                        'title' => $request->s_title[$i] ?? '',
                        'alt_image' => $request->s_alt_image[$i] ?? '',
                        'description' => $request->s_description[$i] ?? '',
                    ];

                    $s_image = NULL;
                    if (isset($request->s_image[$i])) {
                        $s_image = storeImage($request->s_image[$i], 'service/app');
                        $serviceAppData['image'] = $s_image;
                    }

                    if (isset($request->service_app_id[$i])) {
                        $serviceappupdate = ServiceApp::findOrFail($request->service_app_id[$i]);
                        if (!blank($s_image)) {
                            deleteImage($serviceappupdate->image);
                            $serviceAppData['image'] = $s_image;
                        }
                        $serviceappupdate->update($serviceAppData);
                    } else {
                        $serviceAppData['image'] = $s_image;
                        $serviceAppCreate = ServiceApp::create($serviceAppData);
                    }
                }
            }
        }


        /*Delete services Feature*/
        if(isset($request->feature_id)){
            $deleteSFList = ServiceFeature::where(['service_id' => $id])->whereNotIn('id', $request->feature_id)->get();
            foreach($deleteSFList as $dsf) {
                deleteImage($dsf->image);
                $dsf->delete();
            }
        }

        if(isset($request->sf_title)){
            $serviceFeatureCount =  count($request->sf_title);

            if ($serviceFeatureCount >= 1) {
                for ($i = 0; $i < $serviceFeatureCount; $i++) {
                    if(isset($request->sf_title[$i])){
                        $serviceFeatureData = [
                            'service_id' => $service->id,
                            'title' => $request->sf_title[$i] ?? '',
                            'alt_image' => $request->sf_alt_image[$i] ?? '',
                            'description' => $request->sf_description[$i] ?? '',
                        ];

                        $sf_image = null;
                        if (isset($request->sf_image[$i])) {
                            $sf_image = storeImage($request->sf_image[$i], 'service/feature');
                            $serviceFeatureData['image'] = $sf_image;
                        }

                        if (isset($request->feature_id[$i])) {
                            $serviceappupdate = ServiceFeature::findOrFail($request->feature_id[$i]);
                            if (!blank($sf_image)) {
                                deleteImage($serviceappupdate->image);
                                $serviceFeatureData['image'] = $sf_image;
                            }
                            $serviceappupdate->update($serviceFeatureData);
                        } else {
                            ServiceFeature::create($serviceFeatureData);
                        }
                    }
                }
            }
        }

        /*Delete services Faq*/
        if(isset($request->faq_id)){
            Faq::where(['type_id' => $id, 'type' => 'service'])->whereNotIn('id', $request->faq_id)->delete();
        }


        if(isset($request->faq_question)){
            $faqCount =  count($request->faq_question);
            if ($faqCount >= 1) {
                for ($i = 0; $i < $faqCount; $i++) {
                    if(!empty($request->faq_id[$i])){

                        $faqupdate = Faq::findOrFail($request->faq_id[$i]);
                        $faqupdate->update([
                            'question' => $request->faq_question[$i] ?? ' ',
                            'answer' => $request->faq_answer[$i] ?? ' '
                        ]);

                    } else {
                        if(isset($request->faq_question[$i])){
                            Faq::Create([
                                'type_id' => $id,
                                'type' => 'service',
                                'question' => $request->faq_question[$i] ?? ' ',
                                'answer' => $request->faq_answer[$i] ?? ' '
                            ]);
                        }
                    }
                }
            }
        }


        return redirect()->route('admin.service.index')->with('message', 'Succfully Updated');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->serviceBenefits->each->delete();
        $service->serviceExpertises->each->delete();
        $service->faqs->each->delete();
        $service->serviceFeatures->each->delete();
        $service->serviceAppes->each->delete();

        return  softDelete($service);
    }
    public function faq($id)
    {
        $data = Faq::find($id);
        return  softDelete($data);
    }
    public function serviceApp($id)
    {
        $data = ServiceApp::find($id);
        deleteImage($data->image);
        return  softDelete($data);
    }
    function status($id){
        $data = Service::find($id);
        return changeStatus($data);
    }
}
