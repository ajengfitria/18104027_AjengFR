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

//memanggil method index dari MyController
Route::get('/','MyController@index')->name('index');

//memanggil method about dari MyController
Route::get('/tentang','MyController@about')->name('about');

Route::get('/mahasiswa','StudentController@index')->name('student.index');

Route::get('/mahasiswa/tambah','StudentController@create')->name('student.create');

Route::post('/mahasiswa/tambah','StudentController@store')->name('student.store');

Route::get('/mahasiswa/edit/{id}','StudentController@edit')->name('student.edit');

Route::get('/mahasiswa/edit/{id}','StudentController@update')->name('student.update');
