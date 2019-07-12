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
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('/admin', 'AdminController@index');

Route::get('/upload/foto','UploadController@showUploadPhoto');
Route::post('/upload/foto','UploadController@storePhoto');
Route::get('/upload/video','UploadController@showUploadVideo');
Route::post('/upload/video','UploadController@storeVideo');

Route::get('/admin/approve','AdminController@showApprove');
Route::post('/admin/approve','AdminController@approve');

Route::get('/Agriculture_Mining','HomeController@show_agri_mining');
Route::get('/Economic_Trade','HomeController@show_eco_trade');
Route::get('/Social_Population','HomeController@show_soc_pop');

Route::get('/show/foto/{nama_foto}','UploadController@showPhoto');

