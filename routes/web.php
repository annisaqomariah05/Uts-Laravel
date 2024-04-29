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
    return view('index');
});

Route::get('Annisa', function () {
    return view('Annisa');
});

Route::get('Mahasiswa', function () {
    $nama = 'annisaqomariah';
    return view('Mahasiswa', compact('nama'));
});

Route::get('produk', function () {
    return view('produk');
});

