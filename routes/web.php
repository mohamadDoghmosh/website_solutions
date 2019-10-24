<?php

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
    return redirect(route('web.main'));
    
});
Route::get('/testweb', function () {
    return view('web.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/main', 'adminmain@index');

Route::get('/', 'WebController@index')->name('web.main');




route::prefix('admin')->middleware('Admin')->group(function(){
Route::get('/admin/main', 'adminmain@index');

Route::resource('/product', 'ProductController');
    
});
route::prefix('admin')->middleware('Admin')->group(function(){

Route::resource('/service', 'ServiceController');
    
});
route::prefix('admin')->middleware('Admin')->group(function(){

Route::resource('/category', 'CategoryController');
    
});
route::prefix('admin')->middleware('Admin')->group(function(){

Route::resource('/user', 'UserController');
    
});