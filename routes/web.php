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
Route::get('logout', function () {
    return redirect('/');
});
Route::post('login', 'App\Http\Controllers\LoginController@login');
Route::get('dashboard', 'App\Http\Controllers\LoginController@dashboard');

Route::get('barang', 'App\Http\Controllers\BarangController@index');
Route::get('barang/tambah', 'App\Http\Controllers\BarangController@create');
Route::get('barang/edit/{id}', 'App\Http\Controllers\BarangController@edit');
Route::post('barang', 'App\Http\Controllers\BarangController@store');
Route::post('barang/{id}', 'App\Http\Controllers\BarangController@update');
Route::delete('barang/{id}', 'App\Http\Controllers\BarangController@delete');

Route::get('pembelian', 'App\Http\Controllers\TransaksiController@indexpembelian');
Route::get('pembelian/tambah', 'App\Http\Controllers\TransaksiController@createpembelian');
Route::get('pembelian/{id}', 'App\Http\Controllers\TransaksiController@showpembelian');
Route::post('pembelian', 'App\Http\Controllers\TransaksiController@storepembelian');

Route::get('penjualan', 'App\Http\Controllers\TransaksiController@indexpenjualan');
Route::get('penjualan/tambah', 'App\Http\Controllers\TransaksiController@createpenjualan');
Route::get('penjualan/{id}', 'App\Http\Controllers\TransaksiController@showpenjualan');
Route::post('penjualan', 'App\Http\Controllers\TransaksiController@storepenjualan');