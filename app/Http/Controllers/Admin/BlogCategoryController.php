<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCatRequest;
use App\Repositories\BlogCategoryRepository;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    protected BlogCategoryRepository $blogCatRepo;
    public function __construct(BlogCategoryRepository $blogCategoryRepository)
    {
        $this->blogCatRepo = $blogCategoryRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
          return  $this->blogCatRepo->datatable();
        }
        $data['funinit'] = array('BlogCategory.initView()');
        return view('admin.blog.category.index', $data);
    }

    public function create()
    {
        $data['funinit'] = array('BlogCategory.initAdd()');
        return view('admin.blog.category.create', $data);
    }

    public function store(BlogCatRequest $request)
    {
        $this->blogCatRepo->startQuery()->create($request->all());
        return createBack();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['category'] = $this->blogCatRepo->startQuery()->findOrFail($id);
        $data['funinit'] = array('BlogCategory.initAdd()');
        return view('admin.blog.category.create', $data);
    }

    public function update(BlogCatRequest $request, $id)
    {
        $category = $this->blogCatRepo->startQuery()->findOrFail($id);
        $category->update($request->all());
        return redirect()->route('admin.blog-category.index')->with('message', 'successfully updated');
    }

    public function destroy($id)
    {
        $data = $this->blogCatRepo->startQuery()->findOrFail($id);
        if (!empty($data)) {
            $data->delete();
            return \Response::json(message(200, 'Successful deleted'));
        }
        return \Response::json(message(400, "Something went wrong"));

    }

    function status($id){
       return $this->blogCatRepo->status($id);

    }
}
