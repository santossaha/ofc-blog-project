<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\blogRequest;
use App\Models\Blog;
use App\Repositories\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected BlogRepository $blogRep;
    public function __construct(BlogRepository $blogRepository)
    {
         $this->blogRep = $blogRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
           return $this->blogRep->datatable();
        }
        $data['funinit'] = array('Blog.initView()');
        return view('admin.blog.index', $data);
    }

    public function create()
    {
        $data['categoryes'] = $this->blogRep->blogCatQuery()->select('id', 'name', 'status')->active()->get();
        $data['funinit'] = array('Blog.initAdd()');
        return view('admin.blog.create', $data);
    }

    public function store(blogRequest $request)
    {
        $blog = $this->blogRep->storeBlog($request);
        if($blog){
            return back()->with('success', 'Successfully Created');
        }else{
            return back()->with('error', 'Something is wrong!!');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['categoryes'] = $this->blogRep->blogCatQuery()->select('id', 'name', 'status')->active()->get();;
        $data['blog'] = $this->blogRep->startQuery()->findOrFail($id);
        $data['funinit'] = array('Blog.initAdd()');
        return view('admin.blog.create', $data);
    }

    public function update(blogRequest $request, $id)
    {
        $blog = $this->blogRep->updateBlog($request, $id);
        if($blog){
            return redirect()->route('admin.blog.index')->with('success','Successfully updated');
        }else{
            return back()->with('error', 'Something is wrong!!');
        }

    }

    public function destroy($id)
    {
        return $this->blogRep->softDelete($id);
    }
    function status($id){
        return $this->blogRep->status($id);
    }
}
