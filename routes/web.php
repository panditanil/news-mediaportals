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


Route::view('/system.setting','backend.systeminfo')->name('system.setting');



Route::group(['prefix' =>'admin'], function () {
    //Dashboard
    Route::view('/dashboard','backend.index')->name('dashboard');

    //System Setting
   Route::post('system-setting','systemcontroller@systemdata')->name('systemform');
   Route::view('system.setting','backend.systeminfo')->name('system.setting');

   //Category Create
   Route::post('/category-data','categorycontroller@categorydata')->name('category.data');
   Route::view('/category','backend.category.create')->name('category');

   //Category Display
   Route::get('/admin.display','categorycontroller@displayData')->name('admin.display');

   //Category Edit
   Route::get('/edit/{id}','categorycontroller@edit')->name('admin_edit');

   //Category Update
   Route::post('/update/{id}','categorycontroller@update')->name('admin.update');

   
 

});



Route::get('/', function () {
    return view('welcome');
});
