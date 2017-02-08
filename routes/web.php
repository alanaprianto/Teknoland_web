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
    Route::get('/products', 'ProductController@getIndex');
    Route::post('/product-list', 'ProductController@getList');
    Route::get('/product/{param}', 'ProductController@getProduct');
    Route::post('/product/modify', 'ProductController@postProduct');
    Route::post('/product/delete', 'ProductController@deleteProduct');

    Route::get('/teams', 'TeamController@getIndex');
    Route::get('/team/{param}', 'TeamController@getCreateEdit');
    Route::post('/team/modify', 'TeamController@postTeam');
});