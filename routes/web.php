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

Auth::routes();

Route::get('/', 'HomeController')->name('home');
Route::view('service', 'service')->name('service');
Route::view('service/media_consulting', 'media_consulting')->name('service.media_consulting');
Route::view('service/human_resource_development', 'human_resource_development')->name('service.human_resource_development');
Route::view('service/translation', 'translation')->name('service.translation');
Route::view('products', 'products')->name('products');
Route::view('company', 'company')->name('company');
Route::resource('contact', 'ContactController')->only(['index', 'store']);
Route::view('recruit', 'recruit')->name('recruit');
