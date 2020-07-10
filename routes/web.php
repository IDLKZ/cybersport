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

Route::get('/', function () {
    return view('frontend.home');
})->name('main');
Route::get('/0.0.0.0', function (){
    return view('backend.login');
});

Route::group(['middleware' => 'Admin', 'namespace' => 'Admin', 'prefix' => 'admin'], function (){
    Route::get('/', function (){return view('backend.dashboard');})->name('admin');
});

Route::get('/logout', function (){
   \Illuminate\Support\Facades\Auth::logout();
   return redirect()->route('main');
})->name('logout');
