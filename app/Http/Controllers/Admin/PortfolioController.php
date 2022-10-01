<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Http\Requests\Admin\PortfolioRequest;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioScreenshot;
use App\Models\PortfolioSolution;
use App\Repositories\PortfolioRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PortfolioController extends Controller
{
    protected PortfolioRepository $portfolioRepo;

    public  function __construct(PortfolioRepository $portfoliorepo){
        $this->portfolioRepo = $portfoliorepo;
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
          return  $this->portfolioRepo->datatable();
        }
        $data['funinit'] = array('Portfolio.initView()');
        return view('admin.portfolio.index', $data);
    }

    public function create()
    {
        $data['categoryes'] = PortfolioCategory::select('id', 'name')->get();
        $data['funinit'] = array('Portfolio.initAdd()');

        return view('admin.portfolio.create', $data);
    }

    public function store(PortfolioRequest $request)
    {
        $data = $this->portfolioRepo->storePortFolio($request);
        if (!empty($data)) {
            return redirect()->route('admin.portfolio.index')->with('message','Successfully Created');
        }

    }
    /*public function show($id)
    {
        //
    }*/

    public function edit($id)
    {
        $data['categoryes'] = PortfolioCategory::select('id', 'name')->get();
        $data['portfolio'] = Portfolio::with('screenshots', 'solutions')->findorFail($id);
        $data['funinit'] = array('Portfolio.initAdd()','Portfolio.initEdit()');
        return view('admin.portfolio.edit', $data);
    }

    public function update(Request $request, $id)
    {
       $data =  $this->portfolioRepo->updatePortFolio($request,$id);
       if(!empty($data)){
           return redirect()->route('admin.portfolio.index')->with('message','Successfully Updated');
       }
    }

    public function destroy($id)
    {
        $data = $this->portfolioRepo->startQuery()->findOrFail($id);
        $data->solutions()->delete();
        $data->screenshots()->delete();
        return softDelete($data);
    }

    function status($id){
        $data = $this->portfolioRepo->startQuery()->findOrFail($id);
        return changeStatus($data);
    }

     public function removeScreenshot($id)
     {
         $data = PortfolioScreenshot::find($id);
         deleteImage($data->image);
         return softDelete($data);
     }

   /* public function solution($id)
    {
        $data = PortfolioSolution::find($id);
        return softDelete($data);
    }*/
}
