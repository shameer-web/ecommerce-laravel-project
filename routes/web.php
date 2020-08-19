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
    return view('frondend.index');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' =>['auth','isAdmin']],function(){
    

    Route::get('/dashbord', function () {
    return view('admin.dashbord');
    });

    Route::get('registered-user','Admin\RegisteredController@index');

});


Route::group(['middleware' =>['auth','isVendor']],function(){
    

    Route::get('/vendor-dashbord', function () {
    return view('vendor.dashbord');
    });

});