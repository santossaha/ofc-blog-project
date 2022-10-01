<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\PortfolioCategory;
use App\Models\Solution;
use App\Models\SolutionBenifit;
use App\Models\SolutionScreenshot;
use App\Models\TechnologyType;
use App\Repositories\SolutionRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SolutionController extends Controller
{
    protected SolutionRepository $solutionRepo;
    public function __construct(SolutionRepository $solutionRepository){
        $this->solutionRepo = $solutionRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->solutionRepo->datatable();
        }
        $data['funinit'] = array('Solution.initView()');
        return view('admin.solution.index', $data);
    }

    public function create()
    {
        $data['categoryes'] = PortfolioCategory::select('id', 'name')->where('status', 1)->get();
        $data['technologyTypeList'] = TechnologyType::get();
        $data['funinit'] = array('Solution.initAdd()');
        return view('admin.solution.create', $data);
    }

    public function store(Request $request)
    {
        $solution =  $this->solutionRepo->storeSolution($request);
        if($solution){
            return redirect()->route('admin.solution.index')->with('message','Successfully Add');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['solution'] = $this->solutionRepo->startQuery()->with('screenshots', 'solutions', 'feature_list', 'faq')->findorFail($id);
        $data['technologyTypeList'] = TechnologyType::select('id', 'name')->get();
        $data['funinit'] = array('Solution.initAdd()','Solution.initEdit()');
        return view('admin.solution.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $solution = $this->solutionRepo->updateSolution($id,$request);
        if($solution){
            return redirect()->route('admin.solution.index')->with('message','Successfully Updated');
        }
    }

    public function destroy($id)
    {
        $data = $this->solutionRepo->startQuery()->findOrFail($id);
        if($data){
            return softDelete($data);
        }
    }

    function status($id){
        $data = $this->solutionRepo->startQuery()->findOrFail($id);
        return changeStatus($data);
    }



    public function solution($id)
    {
        $data = PortfolioSolution::find($id);
        return softDelete($data);
    }
}
