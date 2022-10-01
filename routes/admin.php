<?php

use App\Http\Controllers\Admin\BasicController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/home', function () {
    return view('welcome');
});*/

Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false]);
});

/******************Cache clear*******************/
Route::get('clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    return "Cache is cleared";
});
/*************************************************/

Route::group([
    'prefix' => 'admin',
    'name' => 'admin',
    'middleware' => 'AdminAuth',
    'as'=>'admin.'
], function () {
    // Route::get('/', 'BasicController@index');
    Route::get('dashboard', [BasicController::class, 'dashboard'])->name('dashboard');
    Route::resource('/page','Admin\PageController');
    Route::get('page/status/{id}',[PageController::class,'status'])->name('page.status');

    Route::resource('/service', 'Admin\ServiceController');
    Route::get('service/status/{id}',[ServiceController::class,'status'])->name('service.status');
    Route::delete('/service/faq/{id}', 'Admin\ServiceController@faq');
    Route::delete('/service/serviceapp/{id}', 'Admin\ServiceController@serviceApp');

    Route::resource('/blog', 'Admin\BlogController');
    Route::get('blog/status/{id}','Admin\BlogController@status')->name('blog.status');

    Route::resource('/blog-category', 'Admin\BlogCategoryController');
    Route::get('blog-category/status/{id}','Admin\BlogCategoryController@status')->name('blog_category.status');

    Route::resource('/portfolio', 'Admin\PortfolioController');
    Route::get('/portfolio/remove-screenshot/{id}', 'Admin\PortfolioController@removeScreenshot')->name('portfolio.removescreenshot');
    Route::get('portfolio/status/{id}','Admin\PortfolioController@status')->name('portfolio.status');

    Route::resource('/portfolio-category', 'Admin\PortfolioCategoryController');
    Route::get('portfolio-category/status/{id}','Admin\PortfolioCategoryController@status')->name('portfolio-category.status');

    //Technology route
    Route::resource('technology', 'Admin\TechnologyController');
    Route::get('technology/status/{id}', 'Admin\TechnologyController@statusChange')->name('technology.status');

    Route::resource('/solution', 'Admin\SolutionController');
    Route::get('/solution/remove-screenshot/{id}', 'Admin\SolutionController@removeScreenshot')->name('solution.removescreenshot');
    Route::get('solution/status/{id}','Admin\SolutionController@status')->name('solution.status');


    Route::resource('/testimonial', 'Admin\TestimonialController');
    Route::get('testimonial/status/{id}','Admin\TestimonialController@status')->name('testimonial.status');

    //    Jobs management
    Route::resource('job-management', 'Admin\JobController');

    //Development Type Route
    Route::resource('development-type', 'Admin\DevelopmentTypeController');
    Route::get('development-type/status/{id}', 'Admin\DevelopmentTypeController@status')->name('development-type.status');

    Route::resource('contact','Admin\ContactController');
    Route::get('contact/spam/{id}','Admin\ContactController@spam')->name('contact.spam');

    //    profile
    Route::view('setting/profile', 'admin.user.profile')->name('profile');
    Route::patch('/profile', 'Admin\BasicController@updateProfile')->name('profile.update');
    //    setting Change Password
    Route::view('setting/changePassword', 'admin.user.change_password')->name('change-password');
    Route::patch('/changePassword/{id}', 'Admin\BasicController@updatePassword')->name('change-password.update');

    Route::get('/setting', 'Admin\BasicController@editSetting')->name('setting');
    Route::patch('/setting', 'Admin\BasicController@updateSetting')->name('setting.update');

});
Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false]);
});



Auth::routes();
