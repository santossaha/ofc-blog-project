<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobRequest;
use App\Models\Job;
use App\Repositories\JobRepository;
use Illuminate\Http\Request;

class JobController extends Controller
{

    protected JobRepository $jobRepo;
    public function __construct(JobRepository $jobRepository)
    {
        $this->jobRepo = $jobRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
          return $this->jobRepo->datatable();
        }
        $data['funinit'] = array('JobManagement.initView()');
        return view('admin.job.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['funinit'] = array('JobManagement.initAdd()');
        return view('admin.job.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $data = $this->jobRepo->storeJob($request);
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
        $data['jobManagement'] = $this->jobRepo->startQuery()->findOrFail($id);
        $data['funinit'] = array('JobManagement.initEdit()');
        return view('admin.job.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, $id)
    {
        $data = $this->jobRepo->updateJob($request,$id);
        if($data){
            return redirect()->route('admin.job-management.index')->with('message', 'Successfully Updated');
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
        $data = $this->jobRepo->startQuery()->findOrFail($id);
        return  softDelete($data);
    }
}
