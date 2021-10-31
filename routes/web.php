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

Route::get('/', 'SnapFormController@create')->name('form.create');
Route::post('/', 'SnapFormController@store')->name('form.store');
Route::get('/thank-you', 'SnapFormController@show')->name('form.thankyou');
