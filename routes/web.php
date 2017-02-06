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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'auth'],function (){
    Route::get('/upload-index', 'PostController@getIndex');
    Route::post('/get-post-list', 'PostController@getList');
    Route::get('/upload/{param}', 'PostController@getUpload');
    Route::post('/upload', 'PostController@postUpload');
    Route::post('/upload/delete', 'PostController@deletePost');
});