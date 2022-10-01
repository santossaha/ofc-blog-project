<?php


namespace App\Repositories;


use App\Models\Portfolio;
use App\Models\PortfolioScreenshot;
use App\Models\PortfolioSolution;
use Yajra\DataTables\Facades\DataTables;

class PortfolioRepository
{

    protected const PORTFOLIO_TYPE = 'portfolio';
    public function startQuery(){
        return Portfolio::query();
    }

    public function storePortFolio($request){
        $input = $request->all();
        $portfolio = '';

        if(!blank($input['slug'])){
            $input['slug'] = slugify($input['slug']);
        }

        $input['image'] = storeImage($request->image, 'portfolio');
        $input['about_image'] = storeImage($request->about_image, 'portfolio/about');
        $portfolio =  $this->startQuery()->create($input);

        $this->addSolution($request,$portfolio);
        $this->addScreenShort($request,$portfolio);
        return $portfolio;
    }

    public function addScreenShort($request, $portfolio){
        if(isset($request->screenshot) && !empty($portfolio)){
            for ($i = 0; $i < count($request->screenshot); $i++) {
                if (isset($request->screenshot[$i])) {
                    $ss_image = storeImage($request->screenshot[$i], 'portfolio/screenshot');
                    $screenShortArr = [
                        'portfolio_id' => $portfolio->id,
                        'image' => $ss_image,
                    ];
                }
                PortfolioScreenshot::create($screenShortArr);
            }
        }
    }

    public function addSolution($request,$portfolio){
        if(isset($request->q_title) && !empty($portfolio)){
            for ($i = 0; $i < count($request->q_title); $i++) {
                $arrPortfolioSolution = [
                    'portfolio_id' => $portfolio->id,
                    'title' => $request->q_description[$i],
                    'description' => $request->q_description[$i],
                    'type' => PortfolioRepository::PORTFOLIO_TYPE,
                ];
                PortfolioSolution::create($arrPortfolioSolution);
            }
        }
    }

    public function updatePortFolio($request,$id){
        //dd($request->screenshot);
        $portFolio = $this->startQuery()->findOrFail($id);

        $input = $request->all();
        //dd($portFolio->solutions);

        if(!blank($input['slug'])){
            $input['slug'] = slugify($input['slug']);
        }

        if ($request->image) {
            deleteImage($portFolio->image);
            $image = storeImage($request->image, 'portfolio');
            $input['image'] = $image;
        }
        if ($request->about_image) {
            deleteImage($portFolio->about_image);
            $about_image = storeImage($request->about_image, 'portfolio/about');
            $input['about_image'] = $about_image;
        }

        $portFolio->update($input);

        //added new Screen Short image
        $this->addScreenShort($request,$portFolio);
        if($portFolio->solutions){
            $portFolio->solutions()->delete();
        }
        $this->addSolution($request,$portFolio);

    return $portFolio;
    }

    public function datatable(){
        $portfolio = $this->startQuery()->select('id', 'title', 'created_at', 'status')->orderBy('id','DESC');
        return DataTables::of($portfolio)
            ->addIndexColumn()
            ->addColumn('created_at', function($row) {
                return normalDateFormate($row->created_at);
            })
            ->addColumn('status', function($row) {
                $route =route('admin.portfolio.status',$row->id);
                return statusButton($row->status,$route);
            })
            ->addColumn('action', function ($row) {
                $route='portfolio';
                return editActionButton($row->id, $route).' '.deleteActionButton($row->id, $route);
            })
            ->rawColumns(['status','action'])
            ->make(true);
    }

}
