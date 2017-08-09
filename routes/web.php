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
Route::resource('/pegawai', 'PegawaiController');
Route::prefix('mahasiswa')->group(function () {
	Route::get('terhapus', 'MahasiswaController@terhapus')->name('Daftar Arsip');
	Route::delete('{nim}/restore', 'MahasiswaController@restore')->name('Restore Data');
});
Route::resource('mahasiswa', 'MahasiswaController');
//Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/', 'HomeController@index')->name('home');