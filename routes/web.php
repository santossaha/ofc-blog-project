<?php

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false]);
});*/

/******************Cache clear*******************/

/*************************************************/


//Auth::routes();
//Route::get('/login',view('auth.login'));
/*Route::get('/login', function () {
    return view('auth.login');
});*/

//Auth::routes()

//Route::get('/home', 'HomeController@index')->name('home');
