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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('user', 'UserController@index')->name('auth');
Route::get('user/edit', 'UserController@edit')->name('edit.auth');
Route::patch('user/update/{id}', 'UserController@update')->name('update.auth');


Route::get('kegiatan', 'KegiatanController@index')->name('kegiatan');
Route::get('kegiatan/create', 'KegiatanController@create')->name('create.kegiatan');
Route::post('kegiatan/store', 'KegiatanController@store')->name('store.kegiatan');
Route::get('kegiatan/show/{id}', 'KegiatanController@show')->name('show.kegiatan.edit');
Route::get('kegiatan/show/', 'KegiatanController@show')->name('show.kegiatan');
Route::patch('kegiatan/update/{id}', 'KegiatanController@update')->name('update.kegiatan');
Route::get('kegiatan/delete/{id}', 'KegiatanController@delete')->name('delete.kegiatan');
Route::get('kegiatan/cetak-pdf-kegiatan/{id}', 'KegiatanController@cetakPdf')->name('cetakpdf.kegiatan');
Route::get('kegiatan/rekap-pdf-kegiatan', 'KegiatanController@rekapPdf')->name('rekappdf.kegiatan');
Route::get('kegiatan/cari', 'KegiatanController@cari')->name('cari.kegiatan');

Route::get('pemuda_olahraga', 'PO_Controller@index')->name('pemuda_olahraga');
Route::get('pemuda_olahraga/create', 'PO_Controller@create')->name('create.pemuda_olahraga');
Route::post('pemuda_olahraga/store', 'PO_Controller@store')->name('store.pemuda_olahraga');
Route::get('pemuda_olahraga/show/', 'PO_Controller@show')->name('show.pemuda_olahraga');
Route::get('pemuda_olahraga/show/{id}', 'PO_Controller@show')->name('show.pemuda_olahraga.edit');
Route::patch('pemuda_olahraga/update/{id}', 'PO_Controller@update')->name('update.pemuda_olahraga');
Route::get('pemuda_olahraga/delete/{id}', 'PO_Controller@delete')->name('delete.pemuda_olahraga');
Route::get('pemuda_olahraga/cetak-pdf-po/{id}', 'PO_Controller@cetakPdf')->name('cetakpdf.pemuda_olahraga');
Route::get('pemuda_olahraga/rekap-pdf-po', 'PO_Controller@rekapPdf')->name('rekappdf.pemuda_olahraga');
Route::get('pemuda_olahraga/cari', 'PO_Controller@cari')->name('cari.pemuda_olahraga');
