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
    return view('login');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('pembelian', function () {
    return view('pembelian');
});
Route::get('penjualan', function () {
    return view('penjualan');
});

Route::post('login', 'App\Http\Controllers\LoginController@login');
Route::get('barang', 'App\Http\Controllers\BarangController@index');
Route::get('barang/tambah', 'App\Http\Controllers\BarangController@create');
Route::get('barang/edit/{id}', 'App\Http\Controllers\BarangController@edit');
Route::post('barang', 'App\Http\Controllers\BarangController@store');
Route::post('barang/{id}', 'App\Http\Controllers\BarangController@update');
Route::delete('barang/{id}', 'App\Http\Controllers\BarangController@delete');