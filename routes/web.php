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

Route::get('/', 'FrontController@getWelcome');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/send/message', 'FrontController@sendMessage');
Route::get('/view/product/{id}', 'ProductController@getDetail');
Route::get('/gallery', 'FrontController@getGaleries');


Route::group(['middleware' => 'auth'],function (){
    Route::get('/products', 'ProductController@getIndex');
    Route::post('/product-list', 'ProductController@getList');
    Route::get('/product/{param}', 'ProductController@getProduct');
    Route::post('/product/modify', 'ProductController@postProduct');
    Route::post('/product/delete', 'ProductController@deleteProduct');
    Route::post('/product/editstock', 'ProductController@editStock');

    Route::get('/teams', 'TeamController@getIndex');
    Route::get('/team/{param}', 'TeamController@getCreateEdit');
    Route::post('/team/modify', 'TeamController@postTeam');

    Route::get('/services', 'ServiceController@getIndex');
    Route::post('/service-list', 'ServiceController@getList');
    Route::get('/service/{param}', 'ServiceController@getService');
    Route::post('/service/modify', 'ServiceController@postService');
    Route::post('/service/delete', 'ServiceController@deleteService');


    Route::get('/events', 'EventController@getIndex');
    Route::post('/event-list', 'EventController@getList');
    Route::get('/event/{param}', 'EventController@getEvent');
    Route::post('/event/modify', 'EventController@postEvent');
    Route::post('/event/delete', 'EventController@deleteEvent');


    Route::get('/messages', 'HomeController@getIndex');
    Route::post('/message-list', 'HomeController@getList');
    Route::post('/message/delete', 'HomeController@deleteMessage');



});