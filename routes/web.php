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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hotels', 'HotelsController@index')->name('hotels');

Route::get('/create', 'CreateController@index');

Route::post('/create', 'CreateController@create');

Route::get('/hotel/{id}/edit', 'HotelsController@editHotelData');

Route::post('/edit', 'HotelsController@editDetail');

Route::get('/hotel/{id}', 'HotelsController@detail');