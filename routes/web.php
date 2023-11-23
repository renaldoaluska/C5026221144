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
