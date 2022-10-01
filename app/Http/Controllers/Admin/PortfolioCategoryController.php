<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PortfolioCategoryRequest;
use App\Models\PortfolioCategory;
use App\Repositories\PortfolioCatRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PortfolioCategoryController extends Controller
{
    protected PortfolioCatRepository $portCatRepo;
    public function __construct(PortfolioCatRepository $portfolioCatRepository)
    {
        $this->portCatRepo = $portfolioCatRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->portCatRepo->datatable();
        }
        $data['funinit'] = array('PortfolioCategory.initView()');
        return view('admin.portfolio.category.index', $data);
    }

    public function create()
    {
        $data['funinit'] = array('PortfolioCategory.initAdd()');
        return view('admin.portfolio.category.create', $data);
    }

    public function store(PortfolioCategoryRequest $request)
    {
        $this->portCatRepo->startQuery()->create($request->all());
        return createBack();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['category'] = $this->portCatRepo->startQuery()->findOrFail($id);
        $data['funinit'] = array('PortfolioCategory.initAdd()');
        return view('admin.portfolio.category.create', $data);
    }

    public function update(PortfolioCategoryRequest $request, $id)
    {
        $category = PortfolioCategory::findOrfail($id);
        $category->update($request->all());
        return redirect()->route('admin.portfolio-category.index')->with('message','Succsesfully Updated');
    }

    public function destroy($id)
    {
       return $this->portCatRepo->destroy($id);
    }

    function status($id){
       return $this->portCatRepo->status($id);
    }
}
