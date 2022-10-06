<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DevTypeRepository;
use Illuminate\Http\Request;

class DevelopmentTypeController extends Controller
{
    protected DevTypeRepository $devType;
    public function __construct(DevTypeRepository $devTypeRepository)
    {
        $this->devType = $devTypeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->devType->datatable();
        }
        $data['funinit'] = array('DevelopmentType.initView()');
        return view('admin.development_type.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['funinit'] = array('DevelopmentType.initAdd()');
        return view('admin.development_type.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->devType->storeDev($request);
        if($data){
            return createBack();
        }else{
            return errorBack();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['devType'] = $this->devType->startQuery()->findOrFail($id);
        $data['funinit'] = array('DevelopmentType.initEdit()');
        return view('admin.development_type.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->devType->updateDev($request,$id);
        if($data){
            return redirect()->route('admin.development-type.index')->with('success', 'Successfully Updated');
        }else{
            errorBack();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->devType->startQuery()->findOrFail($id);
        return  softDelete($data);
    }

    public function status($id)
    {
        $data = $this->devType->startQuery()->findOrFail($id);
        return changeStatus($data);
    }
}
