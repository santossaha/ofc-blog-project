<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Repositories\ContactRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    protected ContactRepository $contactRepo;
    public function __construct(ContactRepository $contactRepository){
        $this->contactRepo = $contactRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if($request->ajax()){
           return $this->contactRepo->datatable();
       }
       $data['funinit'] = array('Contact.initView()');
        return view('admin.contact.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact =$this->contactRepo->startQuery()->findOrFail($id);
        return view('admin.contact.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->contactRepo->startQuery()->findOrFail($id);
        return softDelete($data);
    }

    public function spam($id){
        $data = $this->contactRepo->statusUpdate($id);
        if($data) {
            $response = ['status' => true, "Message" => 'Status updated successfully', "data" => []];
        }else{
            $response = ['status' => false, "Message" => 'Record not found!', "data" => []];
        }
        return $response;
    }
}
