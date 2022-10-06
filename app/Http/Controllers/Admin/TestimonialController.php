<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestimonialRequest;
use App\Models\Testimonial;
use App\Repositories\TestimonialRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TestimonialController extends Controller
{

    protected TestimonialRepository $testimonialRepo;

    public function __construct(TestimonialRepository $testimonialRepository)
    {
        $this->testimonialRepo = $testimonialRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
           return $this->testimonialRepo->datatable();
        }
        $data['funinit'] = array('Testimonial.initView()');
        return view('admin.testimonial.index', $data);
    }


    public function create()
    {
        $data['funinit'] = array('Testimonial.initAdd()');
        return view('admin.testimonial.create', $data);
    }


    public function store(TestimonialRequest $request)
    {
        $date = $this->testimonialRepo->store($request);
        if($date){
            return createBack();
        }else{
           return errorBack();
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['testimonial'] = $this->testimonialRepo->startQuery()->findOrFail($id);
        $data['funinit'] = array('Testimonial.initEdit()');
        return view('admin.testimonial.create', $data);
    }

    public function update(TestimonialRequest $request, $id)
    {
        $update =  $this->testimonialRepo->updateVal($id,$request);
        if($update){
            return redirect()->route('admin.testimonial.index')->with('success', 'Successfully Updated');
        }else{
            errorBack();
        }
    }

    public function destroy($id)
    {
        $data = $this->testimonialRepo->startQuery()->findOrFail($id);
        return  softDelete($data);
    }

    function status($id)
    {
        $data = $this->testimonialRepo->startQuery()->findOrFail($id);
        return changeStatus($data);
    }
}
