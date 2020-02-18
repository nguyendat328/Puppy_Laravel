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
        Route::get('/',['as'=>'index','uses'=>'dogsController@showk']);
        Route::post('/',['as'=>'limit','uses'=>'dogsController@showk']);

    });
});


