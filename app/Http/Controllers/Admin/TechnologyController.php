<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TechnologyRequest;
use App\Models\TechnologyType;
use App\Repositories\TechnologyRepository;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    protected TechnologyRepository $technologyRepo;
    public function __construct(TechnologyRepository $technologyRepository){
        $this->technologyRepo = $technologyRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->technologyRepo->datatable();
        }
        $data['funinit'] = array('Technology.initView()');
        return view('admin.technology.index', $data);
    }

    public function create()
    {
        $data['technologyTypeList'] = TechnologyType::get();
        $data['funinit'] = array('Technology.initAdd()');
        return view('admin.technology.create', $data);
    }

    public function store(TechnologyRequest $request)
    {
        $technology =  $this->technologyRepo->storageTech($request);
        if($technology){
            return redirect()->route('admin.technology.index')->with('success','Successfully Added');
        }else{
            return redirect()->route('admin.technology.index')->with('error','Something is wrong!!');
        }
    }

    /*public function show($id)
    {
        //
    }*/

    public function edit($id)
    {
        $data['technology'] = $this->technologyRepo->startQuery()->with('service_point', 'app_development', 'faq', 'expertise')->findorFail($id);
        $data['funinit'] = array('Technology.initAdd()','Technology.initEdit()');
        return view('admin.technology.edit', $data);
    }

    public function update(TechnologyRequest $request, $id)
    {
        $solution = $this->technologyRepo->updateTechnology($id,$request);
        if($solution){
            return redirect()->route('admin.technology.index')->with('success','Successfully Updated');
        }else{
            return redirect()->route('admin.technology.index')->with('error','Something is wrong!!');
        }
    }

    public function destroy($id)
    {
        $data = $this->technologyRepo->startQuery()->findOrFail($id);
        if($data){
            return softDelete($data);
        }
    }

    function statusChange($id){
        $data = $this->technologyRepo->startQuery()->findOrFail($id);
        return changeStatus($data);
    }


}
