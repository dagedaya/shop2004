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

use App\Http\Controllers\GoodsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test','GoodsController@action');

Route::get('course/create','CourseController@create');//课程视图
Route::post('course/store','CourseController@store');//执行添加
Route::get('course/index','CourseController@index');//课程列表页面
Route::get('course/destroy/{id}','CourseController@destroy');//删除课程
Route::get('course/edit/{id}','CourseController@edit');//修改页面1
Route::post('course/update/{id}','CourseController@update');//修改页面2
