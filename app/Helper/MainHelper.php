<?php

use App\Admin\Setting;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Solution;
use App\Models\TechnologyType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

function pageGet($slug)
{
    return Cache::remember('pages', 120, function () use ($slug) {
        return  DB::table('pages')
            ->where(['status' => true, 'slug' => $slug])
            ->select('title', 'slug', 'meta_title', 'meta_keyword', 'meta_description', 'meta_robots')
            ->first();
    });
}
function message($status = 0, $message)
{
    return array('status' => $status, 'message' => $message);
}
function createBack()
{
    return back()->with('success', 'Successful created');
}

function errorBack()
{
    return back()->with('error', 'Something is working!!');
}

function storeImage($file, $filePath)
{
    if (!blank($file)) {
        $name = date("YmdHis_").'_'.$file->getClientOriginalName();
        $path = $file->StoreAs($filePath, $name, 'public');
    }
    return $path ?? null;
}
function deleteImage($path)
{
    if (Storage::disk('public')->exists($path)) {
        Storage::disk('public')->delete($path);
    }
}
function getImage($path)
{
    return asset('storage') . '/' . $path;
}
function softDelete($data)
{
    if (!empty($data)) {
        $data->delete();
        return \Response::json(message(200, 'Successful deleted'));
    }
    return \Response::json(message(400, "Something went wrong"));
}

function actionButton($id, $route)
{
    $btn = '<a href="' . $route . '" class="edit btn btn-primary btn-sm">Edit</a>';
    $btn = $btn . '<button   class="btn btn-danger btn-flat btn-sm remove-user ml-1 " onclick="deleteActoin(' . $id . ')">Delete</button>';
    return $btn;
}

function editActionButton($id, $route)
{
    return '<a href="' . route('admin.' . $route . '.edit', $id) . '" class="edit btn btn-primary btn-sm">Edit</a> ';
}

function deleteActionButton($id, $route)
{
    return '<button  class="btn btn-danger btn-flat btn-sm remove-user ml-1  single-delete" data-delete-url-id="' . route('admin.' . $route . '.destroy', $id) . '" >Delete</button>';
}

function showActionButton($id, $route)
{
    return '<a href="' . route('admin.' . $route . '.show', $id) . '" class="edit btn btn-primary btn-sm">Show</a>';
}

/*function getAllCategory()
{
    return BlogCategory::select('id', 'name', 'status')->where('status', 1)->get();
}*/

function changeStatus($data)
{
    $response = [];
    if (!blank($data)) {
        $status = ($data->status == 1) ? 0 : 1;
        $data->update([
            'status' => $status
        ]);
        $response = ['status' => true, "Message" => 'Status updated successfully', "data" => []];
    } else {
        $response = ['status' => false, "Message" => 'Record not found!', "data" => []];
    }
    return $response;
}

function statusButton($status, $route)
{
    if (blank($status)) {
        return '-';
    }
    $name = ($status == 1) ?  'Active' : 'Deactive';
    $color = ($status == 1) ? 'primary' : 'danger';
    $response =  '<a data-id="' . $route . '" href="javascript:"  class="status_change"><span class="kt-badge kt-badge--inline kt-badge--' . $color . '  primary">' . $name . '</span></a>';
    return $response;
}

function blogCategoryIds($id)
{
    $obj = Blog::with('categories')->find($id);
    $ids = array();
    if ($obj) {
        if (!empty($obj->categories->toArray())) {
            $ids = array_column($obj->categories->toArray(), 'id');
        }
    }
    return $ids;
}

function techTypeId($id){
    $obj = Solution::with('solution_technology')->find($id);
    $ids = array();
    if($obj){
        if(!empty($obj->solution_technology->toArray())) {
            $ids = array_column($obj->solution_technology->toArray(),'id');
        }
    }
    return $ids;
}

function getRequestCount($ti, $des,$img){
    $tVal = $ti ? count($ti) : 0;
    $dVal = $des ? count($des) : 0;
    $iVal = $img ? count($img) : 0;
    return  max([$tVal,$dVal,$iVal]);
}



function solutionTechnologyTypeIds($id)
{
    $obj = Solution::with('solution_technology')->find($id);
    $ids = array();
    if ($obj) {
        if (!empty($obj->solution_technology->toArray())) {
            $ids = array_column($obj->solution_technology->toArray(), 'id');
        }
    }
    return $ids;
}

function slugify($text, $divider = '-')
{
    // // replace non letter or digits by divider
    // $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // // transliterate
    // $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // // remove unwanted characters
    // $text = preg_replace('~[^-\w]+~', '', $text);

    // // trim
    // $text = trim($text, $divider);

    // // remove duplicate divider
    // $text = preg_replace('~-+~', $divider, $text);

    // // lowercase
    // $text = strtolower($text);

    // if (empty($text)) {
    //     return 'n-a';
    // }
    $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($text));
    return $slug;
}


function readMore($string, $num=75)
{
    // strip tags to avoid breaking any html
    /*$string = strip_tags($string);
    if (strlen($string) > $num) {
        // truncate string
        $stringCut = substr($string, 0, $num);
        $endPoint = strrpos($stringCut, ' ');

        //if the string doesn't contain any space then it will cut without word basis.
        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        $string .= '...';
    }
    return $string;*/
    $string = strip_tags($string);
    return strlen($string) > $num ? substr($string,0,$num)."..." : $string;
}

function projName(){
    $projName = Setting::select('website_name')->firstOrFail();
    return $projName->website_name;
}

function favicon_icon(){
    $projName = Setting::select('favicon_icon')->firstOrFail();
    return $projName->favicon_icon;
}





function sidebar()
{
    return [
        [
            'name' => 'Dashboard',
            'route' => 'admin.dashboard',
            'modal_route' => ['admin.dashboard',],
            'icon-class' => 'fa-home',
        ],
        [
            'name' => 'Blog Category Management',
            'route' => 'admin.blog-category.index',
            'modal_route' => ['admin.blog-category.index ', 'admin.blog-category.create', 'admin.blog-category.edit'],
            'icon-class' => 'fa-bars',
        ],
        [
            'name' => 'Blog Management',
            'route' => 'admin.blog.index',
            'modal_route' => ['admin.blog.index', 'admin.blog.create', 'admin.blog.edit'],
            'icon-class' => 'fa-file-word',
        ],
        [
            'name' => 'Portfolio Category Management',
            'route' => 'admin.portfolio-category.index',
            'modal_route' => ['admin.portfolio-category.index', 'admin.portfolio-category.create', 'admin.portfolio-category.edit'],
            'icon-class' => 'fa-bars',
        ],
        [
            'name' => 'Portfolio Management',
            'route' => 'admin.portfolio.index',
            'modal_route' => ['admin.portfolio.index', 'admin.portfolio.create', 'admin.portfolio.edit'],
            'icon-class' => 'fa-file-word',
        ],
        [
            'name' => 'Solution Management',
            'route' => 'admin.solution.index',
            'modal_route' => ['admin.solution.index', 'admin.solution.create', 'admin.solution.edit'],
            'icon-class' => 'fa-file-word',
        ],
        [
            'name' => 'Technology Management',
            'route' => 'admin.technology.index',
            'modal_route' => ['admin.technology.index', 'admin.technology.create', 'admin.technology.edit'],
            'icon-class' => 'fa-newspaper',
        ],
        [
            'name' => 'Contact Us Management',
            'route' => 'admin.contact.index',
            'modal_route' => ['admin.contact.index', 'admin.contact.create', 'admin.contact.edit'],
            'icon-class' => 'fa-users',
        ],
        [
            'name' => 'Service Management',
            'route' => 'admin.service.index',
            'modal_route' => ['admin.service.index', 'admin.service.create', 'admin.service.edit'],
            'icon-class' => 'fa-list-alt',
        ],
        [
            'name' => 'Page Detail',
            'route' => 'admin.page.index',
            'modal_route' => ['admin.page.index', 'admin.page.create', 'admin.page.edit'],
            'icon-class' => 'fa-file',
        ],
        [
            'name' => 'Testimonials',
            'route' => 'admin.testimonial.index',
            'modal_route' => ['admin.testimonial.index', 'admin.testimonial.create', 'admin.testimonial.edit'],
            'icon-class' => 'fa-address-card',
        ],
        [
            'name' => 'Development Type Management',
            'route' => 'admin.development-type.index',
            'modal_route' => ['admin.development-type.index', 'admin.development-type.create', 'admin.development-type.edit'],
            'icon-class' => 'fa-bars'
        ],
        [
            'name' => 'Job Management',
            'route' => 'admin.job-management.index',
            'modal_route' => ['admin.job-management.index', 'admin.job-management.create', 'admin.job-management.edit'],
            'icon-class' => 'fa-tasks',
        ],
        [
            'name' => 'Setting',
            'route' => '',
            'modal_route' => ['admin.profile', 'admin.change-password', 'admin.setting'],
            'icon-class' => 'fa-home',
            'submenu' => [
                [
                    'name' => 'Profile',
                    'route' => 'admin.profile',
                    'modal_route' => ['admin.profile',],
                    'icon-class' => 'fa-home',
                ],
                [
                    'name' => 'Change Password',
                    'route' => 'admin.change-password',
                    'modal_route' => ['admin.change-password'],
                    'icon-class' => 'fa-home',
                ],
                [
                    'name' => 'Setting',
                    'route' => 'admin.setting',
                    'modal_route' => ['admin.setting',],
                    'icon-class' => 'fa-home',
                ],
            ]
        ],
    ];
}

function normalDateFormate($data){
    return date("Y-m-d H:i:s", strtotime($data));
}

