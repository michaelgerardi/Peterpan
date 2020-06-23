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
    return view('layouts.layout');
});
//Login manual
route::get('/home','loginController@index')->name('login');
route::post('/postlogin','loginController@postlogin');
route::get('/logout','loginController@logout')->name('logout');

//Register
route::get('/Register','registerController@index');
route::post('/Register/create','registerController@create');

//dashborad login
route::get('/Dashboard','loginController@login_dashboard');

//login with google
Route::get('login/google', 'loginController@redirect');
Route::get('login/google/callback', 'loginController@Callback');

// Authentikasi website
Route::group(['middleware' => 'auth'], function () {

// data peserta
route::get('/Peserta','pesertaController@Index')->name('indexpeserta');
route::post('/Peserta/create','pesertaController@Create');
route::get('/proseseditpeserta/{id}','pesertaController@editpeserta')->name('proseseditpeserta');
route::get('/editpeserta/{id}','pesertaController@vedit')->name('editpeserta');
route::get('/deletepeserta/{id_peserta}','pesertaController@deletepeserta');

// Data Donatur
route::get('/Donatur','donaturController@Index')->name('indexdonatur');
route::post('/Donatur/create','donaturController@Create');
route::get('/proseseditdonatur/{id}','donaturController@editdonatur')->name('proseseditdonatur');
route::get('/editdonatur/{id}','donaturController@vedit')->name('editdonatur');
route::get('/deletedonatur/{id_donatur}','donaturController@deletedonatur');

// Data Kegiatan
route::get('/Kegiatan','kegiatanController@Index')->name('indexkegiatan');
route::post('/Kegiatan/create','kegiatanController@Create');
route::get('/proseseditkegiatan/{id}','kegiatanController@editkegiatan')->name('proseseditkegiatan');
route::get('/editkegiatan/{id}','kegiatanController@vedit')->name('editkegiatan');
route::get('/deletekegiatan/{id_kegiatan}','kegiatanController@deletekegiatan');

//Data Group
route::get('/Group','groupController@Index')->name('indexgroup');
route::post('/Group/create','groupController@Create');
route::get('/proseseditgroup/{id}','groupController@editgroup')->name('proseseditgroup');
route::get('/editgroup/{id}','groupController@vedit')->name('editgroup');
route::get('/deletegroup/{id_group}','groupController@deletegroup');

//Data Detail Kegiatan
route::get('/Detail','detailController@Index')->name('indexdetail');
route::post('/Detail/create','detailController@Create');
route::get('/proseseditdetail/{id}','detailController@editdetail')->name('proseseditdetail');
route::get('/editdetail/{id}','detailController@vedit')->name('editdetail');
route::get('/deletedetail/{id_detail}','detailController@deletedetail');

//Laporan
route::get('/Keuangan','LaporankeuanganController@index');

//pencarian
Route::get('/perolehan/cari','LaporanKeuanganController@cari');

//Export Laporan Keuangan To PDF

route::get('/downloadPDF/detailpdf','detailController@downloadPDF');
route::get('/downloadPDF/download-pdf','LaporankeuanganController@download_pemasukan');
route::get('/downloadPDF/export-peserta','pesertaController@export_peserta');

//grafik bulan pemasukan 
route::get('/grafik','GrafikController@grafik');

});

