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
    return view('home');
});
route::get('/home','loginController@index')->name('indexlogin');

route::get('/Peserta','pesertaController@Index')->name('indexpeserta');
route::post('/Peserta/create','pesertaController@Create');
route::get('/proseseditpeserta/{id}','pesertaController@editpeserta')->name('proseseditpeserta');
route::get('/editpeserta/{id}','pesertaController@vedit')->name('editpeserta');
route::get('/deletepeserta/{id_peserta}','pesertaController@deletepeserta');

route::get('/Donatur','donaturController@Index')->name('indexdonatur');
route::post('/Donatur/create','donaturController@Create');
route::get('/proseseditdonatur/{id}','donaturController@editdonatur')->name('proseseditdonatur');
route::get('/editdonatur/{id}','donaturController@vedit')->name('editdonatur');
route::get('/deletedonatur/{id_donatur}','donaturController@deletedonatur');

route::get('/Kegiatan','kegiatanController@Index')->name('indexkegiatan');
route::post('/Kegiatan/create','kegiatanController@Create');
route::get('/proseseditkegiatan/{id}','kegiatanController@editkegiatan')->name('proseseditkegiatan');
route::get('/editkegiatan/{id}','kegiatanController@vedit')->name('editkegiatan');
route::get('/deletekegiatan/{id_kegiatan}','kegiatanController@deletekegiatan');

route::get('/Group','groupController@Index')->name('indexgroup');
route::post('/Group/create','groupController@Create');
route::get('/proseseditgroup/{id}','groupController@editgroup')->name('proseseditgroup');
route::get('/editgroup/{id}','groupController@vedit')->name('editgroup');
route::get('/deletegroup/{id_group}','groupController@deletegroup');

route::get('/Detail','detailController@Index')->name('indexdetail');
route::post('/Detail/create','detailController@Create');
route::get('/proseseditdetail/{id}','detailController@editdetail')->name('proseseditdetail');
route::get('/editdetail/{id}','detailController@vedit')->name('editdetail');
route::get('/deletedetail/{id_detail}','detailController@deletedetail');