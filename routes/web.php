<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login',[
    'as'=>'login',
    'uses'=>'App\Http\Controllers\AccountController@login'
]);

Route::post('login',[
    'as'=>'login',
    'uses'=>'App\Http\Controllers\AccountController@postLogin'
]);

Route::get('index',[
    'as'=>'index',
    'uses'=>'App\Http\Controllers\HomeController@index'
]);

Route::get('device',[
    'as'=>'device',
    'uses'=>'App\Http\Controllers\HomeController@device'
]);