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

route::get('/shady',function (){
    return view('welcome');
});

Auth::routes(['verify'=>true]);

    route::group(['namespace'=>'tests'],function (){

        route::get('/test1','TestController@returntest');

    });




Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
