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

//memanggil method index dari StudentController
Route::get('/mahasiswa','StudentController@index')->name('student.index');

//memanggil method create dari StudentController
Route::get('/mahasiswa/tambah','StudentController@create')->name('student.create');

//memanggil method store dari StudentController
Route::post('/mahasiswa/tambah','StudentController@store')->name('student.store');

//memanggil method edit dari StudentController
Route::get('/mahasiswa/edit/{id}','StudentController@edit')->name('student.edit');

//memanggil method update dari StudentController
Route::put('/mahasiswa/edit/{id}','StudentController@update')->name('student.update');

//memanggil method destroy dari StudentController
Route::delete('/mahasiswa/hapus/{id}','StudentController@destroy')->name('student.destroy');

//memanggil method data dari StudentController
Route::get('mahasiswa/data','StudentController@data')->name('student.data');


//memanggil method data_destroy dari StudentController
Route::get('mahasiswa/data/hapus/{id}','StudentController@data_destroy')->name('student.data.destroy');