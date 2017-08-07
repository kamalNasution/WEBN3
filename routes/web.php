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

Route::get('/sejarah', function () {
    return view('sejarahPerusahan');
});

Route::get('/komisaris', function () {
    return view('komisaris');
});

Route::get('/visi', function () {
    return view('visi');
});

Route::get('/perkebunan', function () {
    return view('perkebunan');
});

Route::get('/pabrik', function () {
    return view('pabrik');
});

Route::get('/produk', function () {
    return view('produk');
});
Route::get('/pengaduan', function () {
    return view('pengaduan');
});
Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});