<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//memanggil method index dari MyController
Route::get('/','MyController@index')->name('index');

//memanggil method about dari MyController
Route::get('/tentang','MyController@about')->name('about');
