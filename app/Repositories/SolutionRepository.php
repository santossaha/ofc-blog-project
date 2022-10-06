<?php


namespace App\Repositories;


use App\FrequentlyAskedQuestion;
use App\Models\Faq;
use App\Models\FeatureList;
use App\Models\PortfolioSolution;
use App\Models\Solution;
use App\Models\SolutionScreenshot;
use Yajra\DataTables\Facades\DataTables;

class SolutionRepository
{
    protected const PORTFOLIO_TYPE = 'solution';
    public function startQuery()
    {
        return Solution::query();
    }

    public function datatable(){
        return DataTables::of($this->startQuery()->latest()->select('id','title','created_at','status'))
            ->addIndexColumn()
            ->addColumn('created_at', function($row) {
                return date("Y-m-d H:i:s", strtotime($row->created_at));
            })
            ->addColumn('status', function($row) {
                $route =route('admin.solution.status',$row->id);
                return statusButton($row->status,$route);
            })
            ->addColumn('action', function ($row) {
                $route='solution';
                return editActionButton($row->id, $route).' '.deleteActionButton($row->id, $route);
            })
            ->rawColumns(['status','action'])
            ->make(true);
    }

    public function storeSolution($request){
        $input = $request->all();
        if(!blank($request['title'])){
            $input['slug'] = slugify($request['title']);
        }

        $input['image'] = storeImage($request->image, 'solution/icon');
        $input['about_image'] = storeImage($request->about_image, 'solution/about');

        $solution = $this->startQuery()->create($input);
        //Technology Category
        if (!empty($request->tech_type)) {
            $solution->solution_technology()->sync($request->tech_type); //tech_type
        }
        $solutionID = $solution->id;
        $this->solutionList($solutionID,$request);
        $this->featureList($solutionID,$request);
        $this->screeShort($solutionID,$request);
        $this->faq($solutionID,$request);
        return $solution;

    }

   public function solutionList($solutionId,$request){
        if($request->q_title || $request->q_description || $request->q_image){
            $countFTitle = count($request->q_title);
            if ($countFTitle >= 1) {
                for ($i = 0; $i < $countFTitle; $i++) {
                    $arrSolution = [
                        'portfolio_id' => $solutionId,
                        'title' => $request->q_title[$i],
                        'description' => $request->q_description[$i],
                        'type' => self::PORTFOLIO_TYPE,
                        'image' =>  $request->q_image ? storeImage($request->q_image[$i], 'solution/solution') : ' ',
                    ];
                    PortfolioSolution::create($arrSolution);
                }
            }
        }
   }

   public function featureList($solutionId,$request){
       if($request->f_title || $request->f_description || $request->f_image){
           $countFTitle = count($request->f_title);
           if ($countFTitle >= 1) {
               for ($i = 0; $i < $countFTitle; $i++) {
                   $arrFeature = [
                       'solution_id' => $solutionId,
                       'title' => $request->f_title[$i],
                       'description' => $request->f_description[$i],
                       'image' => $request->f_image ? storeImage($request->f_image[$i], 'solution/feature') : 'NULL',
                   ];
                   FeatureList::create($arrFeature);
               }
           }
       }
   }

   public function screeShort($solutionId,$request){
       if($request->s_title || $request->s_description || $request->s_image){
           $countFTitle = count($request->s_title);
           if ($countFTitle >= 1) {
               for ($i = 0; $i < $countFTitle; $i++) {
                   $arrSShort = [
                       'solution_id' => $solutionId,
                       'title' => $request->s_description[$i],
                       'description' => $request->s_description[$i],
                       'image' => $request->s_image ? storeImage($request->s_image[$i], 'solution/screen-short') : 'NULL',
                   ];
                   SolutionScreenshot::create($arrSShort);
               }
           }
       }
   }

   public function faq($solutionId,$request){
       foreach (array_filter($request['faq_title']) as $key => $qtitle) {
           if (!empty($qtitle)) {
               $faq_data = [
                   'type_id' => $solutionId,
                   'type' => SolutionRepository::PORTFOLIO_TYPE,
                   'question' =>  $qtitle,
                   'answer' => $request['faq_description'][$key],
               ];
               Faq::create($faq_data);
           }
       }
   }

   public function updateSolution($id, $request){
       $solution =  $this->startQuery()->findOrFail($id);
       $input = $request->all();
       if(!blank($input['title'])){
           $input['slug'] = slugify($input['title']);
       }

       if ($request->hasFile('image')) {
           deleteImage($solution->image);
           $icon = storeImage($request->image, 'solution/icon');
           $input['image'] = $icon;
       }

       if ($request->hasFile('about_image')) {
           deleteImage($solution->about_image);
           $about_image = storeImage($request->about_image, 'solution/about');
           $input['about_image'] = $about_image;
       }

       $solution->update($input);
       if ($request->tech_type) {
           $solution->solution_technology()->sync($request->tech_type);
       }
       $this->solutionListUpdate($id,$request);
       $this->featuresListUpdate($id,$request);
       $this->screenshotListUpdate($id,$request);
       $this->faqListUpdate($id,$request);

       return $solution;
   }

   public function solutionListUpdate($id,$request){
        if(isset($request->solution_id)){
            $delSol = PortfolioSolution::where('portfolio_id',$id)->whereNotIn('id',$request->solution_id)->get();
            if(!$delSol->isEmpty()){
                foreach ($delSol as $sol){
                    deleteImage($sol->image);
                    $sol->delete();
                }
            }
        }

        //Update Solution title description and image
       $mxVal = getRequestCount($request->q_title,$request->q_description, $request->q_image);
       if($mxVal >= 1){
           for ($i= 0; $i < $mxVal; $i++){
               if(!empty($request->solution_id[$i])){
                   $objSol = PortfolioSolution::findOrFail($request->solution_id[$i]);
                   $arrSol = [
                       'title' => $request->q_title[$i],
                       'description' => $request->q_description[$i],
                   ];
                   if(!empty($request->q_image[$i])){
                       deleteImage($objSol->image);
                       $arrSol['image'] = storeImage($request->q_image[$i],'solution/solution');
                   }
                   $objSol->update($arrSol);
               }else{
                   $arrSol = [
                       'portfolio_id' => $id,
                       'title' => $request->q_title[$i],
                       'description' => $request->q_description[$i],
                       'type' => self::PORTFOLIO_TYPE,
                   ];
                   if(!empty($request->q_image[$i])){
                       $arrSol['image'] = storeImage($request->q_image[$i], 'solution/solution');
                   }
                   PortfolioSolution::create($arrSol);
               }
           }
       }
   }

   //Feature List Update
    public function featuresListUpdate($id, $request){
        if(isset($request->feature_id)){
            $delFeat = FeatureList::where('solution_id',$id)->whereNotIn('id',$request->feature_id)->get();
            if($delFeat){
                foreach ($delFeat as $Feat){
                    deleteImage($Feat->image);
                    $Feat->delete();
                }
            }
        }

        //Update Feature title description and image
        $mxVal = getRequestCount($request->f_title,$request->f_description, $request->f_image);
        if($mxVal >= 1){
            for ($i= 0; $i < $mxVal; $i++){
                if(!empty($request->feature_id[$i])){
                    $objSol = FeatureList::findOrFail($request->feature_id[$i]);
                    $arrSol = [
                        'title' => $request->f_title[$i],
                        'description' => $request->f_description[$i],
                    ];
                    if(!empty($request->f_image[$i])){
                        deleteImage($objSol->image);
                        $arrSol['image'] = storeImage($request->f_image[$i],'solution/feature');
                    }
                    $objSol->update($arrSol);
                }else{
                    $arrSol = [
                        'solution_id' => $id,
                        'title' => $request->f_title[$i],
                        'description' => $request->f_description[$i],
                    ];
                    if(!empty($request->f_image[$i])){
                        $arrSol['image'] = storeImage($request->f_image[$i], 'solution/feature');
                    }
                    FeatureList::create($arrSol);
                }
            }
        }
    }

    //Screenshot List update
    public function screenshotListUpdate($id,$request){
        if(isset($request->screenshot_id)){
            $delSol = SolutionScreenshot::where('solution_id',$id)->whereNotIn('id',$request->screenshot_id)->get();
            if($delSol){
                foreach ($delSol as $sol){
                    deleteImage($sol->image);
                    $sol->delete();
                }
            }
        }

        //Update Screenshot title description and image
        $mxVal = getRequestCount($request->s_title,$request->s_description, $request->s_image);
        if($mxVal >= 1){
            for ($i= 0; $i < $mxVal; $i++){
                if(!empty($request->screenshot_id[$i])){
                    $objSol = SolutionScreenshot::findOrFail($request->screenshot_id[$i]);
                    $arrSol = [
                        'title' => $request->s_title[$i],
                        'description' => $request->s_description[$i],
                    ];
                    if(!empty($request->s_image[$i])){
                        deleteImage($objSol->image);
                        $arrSol['image'] = storeImage($request->s_image[$i],'solution/screen-short');
                    }
                    $objSol->update($arrSol);
                }else{
                    $arrSol = [
                        'solution_id' => $id,
                        'title' => $request->s_title[$i],
                        'description' => $request->s_description[$i],
                    ];
                    if(!empty($request->s_image[$i])){
                        $arrSol['image'] = storeImage($request->s_image[$i], 'solution/screen-short');
                    }
                    SolutionScreenshot::create($arrSol);
                }
            }
        }
    }

    //Faq Update List
    public function faqListUpdate($id,$request){
        if(isset($request->faqs_id)){
            Faq::where('type_id',$id)->whereNotIn('id',$request->faqs_id)->delete();
        }
        $faqCount = count($request->faq_title);
        if($faqCount >= 1){
            for ($i = 0; $i < $faqCount; $i++){
                if(!empty($request->faqs_id[$i])){
                    $objFaq = Faq::findOrFail($request->faqs_id[$i]);
                    $arrFaqs = [
                        'question' => $request->faq_title[$i],
                        'answer' => $request->faq_description[$i],
                    ];
                    $objFaq->update($arrFaqs);
                }else{
                    if(isset($request->faq_title[$i])){
                        Faq::create([
                            'type_id' => $id,
                            'type' => self::PORTFOLIO_TYPE,
                            'question' => $request->faq_title[$i],
                            'answer' => $request->faq_description[$i],
                        ]);
                    }
                }
            }
        }
    }




}
