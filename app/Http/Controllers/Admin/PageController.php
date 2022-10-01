<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PagesRequest;
use App\Models\Page;
use App\Repositories\PageRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class PageController extends Controller
{
    public PageRepository $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
           return $this->pageRepository->dataTable();
        }
        $data['funinit'] = array('Page.initView()');
        return view('admin.page.index', $data);
    }

    public function create()
    {
        $data['funinit'] = array('Page.initAdd()');
        return view('admin.page.create', $data);
    }

    public function store(PagesRequest $request)
    {
        $input = $request->all();
        if(!blank($input['slug'])){
            $input['slug'] = slugify($input['slug']);
        }
       $this->pageRepository->createPage($input);
        return back()->with('message', 'Successfully create Page ');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['page'] = $this->pageRepository->getPageById($id);
        $data['funinit'] = array('Page.initAdd()');
        return view('admin.page.create', $data);
    }

    public function update(PagesRequest $request, $id)
    {
        $input = $request->all();
        $page = $this->pageRepository->getPageById($id);
        if(!blank($input['slug'])){
            $input['slug'] = slugify($input['slug']);
        }
        $page->update($input);
        return redirect()->route('admin.page.index')->with('message','Successfully Updated');
    }

    public function destroy($id)
    {
        $this->pageRepository->deletePage($id);
        return \Response::json(message(200, 'Successful deleted'));
    }

    function status($id){
        $data = $this->pageRepository->status($id);
        if($data){
            $response = ['status' => true, "Message" => 'Status updated successfully', "data" => []];
        }else{
            $response = ['status' => false, "Message" => 'Record not found!', "data" => []];
        }
        return $response;
    }
}
