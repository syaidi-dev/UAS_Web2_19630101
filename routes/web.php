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

Route::get('makul', 'MakulController@index')->name('makul');
Route::get('/makul-create', 'MakulController@create')->name('makul-create');
Route::post('simpan.makul', 'MakulController@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'MakulController@edit')->name('makul.edit');
Route::post('update.makul/{id}', 'MakulController@update')->name('makul.update');
Route::get('hapus.makul/{id}', 'MakulController@destroy')->name('makul.delete');

Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('/nilai-create', 'NilaiController@create')->name('nilai-create');
Route::post('simpan.nilai', 'NilaiController@store')->name('simpan.nilai');

Route::get('edit-nilai/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('update.nilai/{id}', 'NilaiController@update')->name('nilai.update');
Route::get('hapus.nilai/{id}', 'NilaiController@destroy')->name('nilai.delete');