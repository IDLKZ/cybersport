<?php

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
//Frontend start
Route::get('/', "FrontendController@index" )->name('main');

//Auth group - Login, Register , Logout
Route::get('/0.0.0.0', "FrontendController@login")->name("login");
Route::get("register","FrontendController@register")->name("register");
Route::get('/logout',"FrontendController@logout")->name('logout');
//Auth group end

Route::get("create-news","FrontendController@createNews");
Route::get("news","FrontendController@news");
Route::get("news-detail/{slug}","FrontendController@news_detail");

//Frontend end

Route::group(['middleware' => 'Admin', 'namespace' => 'Admin', 'prefix' => 'admin'], function (){
    Route::get('/', function (){return view('backend.dashboard');})->name('admin');
});


