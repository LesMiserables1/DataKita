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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload/foto','UploadController@showUploadPhoto');
Route::post('/upload/foto','UploadController@storePhoto');
Route::get('/approve/foto','AdminController@showApprovePhoto');
Route::post('/approve/foto','AdminController@approvePhoto');

Route::get('/show/foto/{nama_foto}','UploadController@showPhoto');