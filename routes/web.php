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

// di laravel v5 bole langsung nama "DosenController@index
// mulai v7 ke atas, harus sebutin tempat kyk "App\Http\Controllers\"
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('halo', function () {
    return "Halo Apa Kabar";
});

Route::get('halo2', function () {
    return "<h1>Halo apa kabar</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('ets', function () {
    return view('ets');
});

Route::get('kat1.html', function () {
    return view('kat1');
});
Route::get('file1', function () {
    return view('file1');
});

Route::get('file2', function () {
    return view('file2');
});
Route::get('file3', function () {
    return view('file3');
});
Route::get('file4', function () {
    return view('file4');
});
Route::get('file5', function () {
    return view('file5');
});
Route::get('file6', function () {
    return view('file6');
});
Route::get('file7', function () {
    return view('file7');
});
Route::get('file8', function () {
    return view('file8');
});

Route::get('file9', function () {
    return view('file9');
});
Route::get('file10', function () {
    return view('file10');
});

Route::get('file11', function () {
    return view('file11');
});
Route::get('file12', function () {
    return view('file12');
});

Route::get('file13', function () {
    return view('file13');
});

Route::get('file14', function () {
    return view('file14');
});

Route::get('file15', function () {
    return view('file15');
});

Route::get('file16', function () {
    return view('file16');
});

Route::get('file17', function () {
    return view('file17');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route BUS
Route::get('/bus','App\Http\Controllers\BusController@index');
Route::get('/bus/tambah','App\Http\Controllers\BusController@tambah');
Route::post('/bus/store','App\Http\Controllers\BusController@store');
Route::get('/bus/edit/{id}','App\Http\Controllers\BusController@edit');
Route::post('/bus/update','App\Http\Controllers\BusController@update');
Route::get('/bus/hapus/{id}','App\Http\Controllers\BusController@hapus');
Route::get('/bus/cari','App\Http\Controllers\BusController@cari');
Route::get('/bus/view/{id}','App\Http\Controllers\BusController@view');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/nilai','App\Http\Controllers\NilaiController@index');
Route::get('/nilai/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilai/store','App\Http\Controllers\NilaiController@store');


Route::get('/belanja','App\Http\Controllers\BelanjaController@index');
Route::get('/belanja/tambah','App\Http\Controllers\BelanjaController@tambah');
Route::post('/belanja/store','App\Http\Controllers\BelanjaController@store');
Route::get('/belanja/batal/{id}','App\Http\Controllers\BelanjaController@batal');
