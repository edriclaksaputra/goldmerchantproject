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

//Route Kasir
Route::get('/validasi', 'KasirController@validasi')->name('validasi');