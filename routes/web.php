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

/*Auth::routes();*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/signature-collection', 'HomeController@signatureCollection')->name('signatureCollection');
Route::get('/less-is-more', 'HomeController@lessIsMore')->name('lessIsMore');
Route::get('/luxury-scarves', 'HomeController@scarves')->name('scarves');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/work-with-us', 'HomeController@workWithUs')->name('workWithUs');
