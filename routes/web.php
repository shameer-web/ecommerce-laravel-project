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
Route::group(['middleware' =>['auth','isUser']],function(){
   
   Route::get('/home', 'HomeController@index')->name('home');
   Route::get('/my-profile','Frontend\UserController@myprofile');
   Route::post('/my-profile-update','Frontend\UserController@profileupdate');

});


Route::group(['middleware' =>['auth','isAdmin']],function(){
    

    Route::get('/dashbord', function () {
    return view('admin.dashbord');
    });

    Route::get('registered-user','Admin\RegisteredController@index');
    Route::get('role-edit/{id}','Admin\RegisteredController@edit');
    Route::put('role-update/{id}','Admin\RegisteredController@update');

    //Groups

    Route::get('/group','Admin\GroupController@index');
    Route::get('/group-add','Admin\GroupController@create');
    Route::post('/group-store','Admin\GroupController@store');
    Route::get('group-edit/{id}','Admin\GroupController@edit');
    Route::put('group-update/{id}','Admin\GroupController@update');
    Route::get('group-delete/{id}','Admin\GroupController@delete');
    Route::get('group-deleted-records','Admin\GroupController@deletedrecorde');
    
     Route::get('group-re-store/{id}','Admin\GroupController@restore');

     //Category

      Route::get('/category','Admin\CategoryController@index');
      Route::get('/category-add','Admin\CategoryController@create');
      Route::post('/category-store','Admin\CategoryController@store');
      Route::get('category-edit/{id}','Admin\CategoryController@edit');
      Route::put('category-update/{id}','Admin\CategoryController@update');
      Route::get('category-delete/{id}','Admin\CategoryController@delete');
      Route::get('category-deleted-records','Admin\CategoryController@deletedrecorde');
      Route::get('category-re-store/{id}','Admin\CategoryController@restore');


      //Sub-category


      Route::get('/sub-category','Admin\SubcategoryController@index');
      Route::post('/sub-category-store','Admin\SubcategoryController@store');
      Route::get('sub-category-edit/{id}','Admin\SubcategoryController@edit');
      Route::put('sub-category-update/{id}','Admin\SubcategoryController@update');
      Route::get('sub-category-delete/{id}','Admin\SubcategoryController@delete');
      Route::get('sub-category-deleted-records','Admin\SubcategoryController@deletedrecordes');
      
      Route::get('subcategory-re-store/{id}','Admin\SubcategoryController@restore');

       


      




});


Route::group(['middleware' =>['auth','isVendor']],function(){
    

    Route::get('/vendor-dashbord', function () {
    return view('vendor.dashbord');
    });

});