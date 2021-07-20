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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa-create', 'MahasiswaController@create')->name('mahasiswa-create');
Route::post('simpan.mahasiswa', 'MahasiswaController@store')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::post('update.mahasiswa/{id}', 'MahasiswaController@update')->name('mahasiswa.update');
Route::get('hapus.mahasiswa/{id}', 'MahasiswaController@destroy')->name('mahasiswa.delete');