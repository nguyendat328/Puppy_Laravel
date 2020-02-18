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
Route::group(['namespace'=>'admin',
'prefix' => 'admin',
'as'=>'Admin::'],function(){
    Route::group(['prefix'=>'dogs', 'as'=>'dogs@'], function(){
        Route::get('/',['as'=>'index','uses'=>'dogsController@index']);
        Route::post('/',['as'=>'limit','uses'=>'dogsController@index']);
        Route::get('add',['as'=>'add','uses'=>'dogsController@add']);
        Route::get('edit/{id}',['as'=>'edit','uses'=>'dogsController@edit']);
        Route::post('store',['as'=>'store','uses'=>'dogsController@store']);
        Route::post('edit{id}',['as'=>'update','uses'=>'dogsController@add']);




    });
});


