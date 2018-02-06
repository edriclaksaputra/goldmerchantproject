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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


//Route Admin
Route::get('/inputbaru', 'AdminController@inputbarangbaru')->name('inputbarangbaru');
Route::post('/inputbaru.insertbarangbaru', 'AdminController@insertbarangbaru')->name('insertbarangbaru');
Route::get('/inputbaki', 'AdminController@inputbaki')->name('inputbaki');
Route::post('/inputbaki.insertbarangbaki', 'AdminController@insertbarangbaki')->name('insertbarangbaki');
Route::get('/databaki', 'AdminController@databaki')->name('databaki');
Route::post('/databaki.detail', 'AdminController@detaildatabaki')->name('detaildatabaki');

//Route Sales
Route::get('/penjualan', 'SalesController@penjualan')->name('penjualan');
Route::post('/detailbarangpenjualan', 'SalesController@detailbarangpenjualan')->name('detailbarangpenjualan');
Route::post('/inputpenjualan', 'SalesController@inputpenjualan')->name('inputpenjualan');

Route::get('/pembelian', 'SalesController@pembelian')->name('pembelian');
Route::get('/pembeliandalam', 'SalesController@pembeliandalam')->name('pembeliandalam');
Route::post('/detailpembelianbarang', 'SalesController@detailpembelianbarang')->name('detailpembelianbarang');
Route::post('/inputdatapembelian', 'SalesController@inputdatapembelian')->name('inputdatapembelian');
Route::get('/gadai', 'SalesController@gadai')->name('gadai');
Route::post('/gadai.inputdetailgadai', 'SalesController@inputdetailgadai')->name('inputdetailgadai');
Route::get('/tebus', 'SalesController@tebus')->name('tebus');
Route::post('/tebus.detailtebus', 'SalesController@detailtebus')->name('detailtebus');
Route::post('/tebus.detailtebus.checkouttebus', 'SalesController@checkouttebus')->name('checkouttebus');

//Route Kasir
Route::get('/validasitransaksi', 'KasirController@index')->name('validasitransaksi');
Route::post('/validasitransaksi.validasi', 'KasirController@validasi')->name('validasi');