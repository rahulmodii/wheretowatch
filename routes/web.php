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
Route::get('/admin','ShowsController@admin')->middleware('auth');
Route::get('/', 'ShowsController@list');
Route::get('/details/{title}','ShowsController@showdetails');
Route::get('create','platformcontoller@index');
Route::post('create','platformcontoller@store');
Route::get('shows','ShowsController@index');
Route::post('shows','ShowsController@store');
Route::get('list','ShowsController@list');
Auth::routes();
Route::get('listing', 'ShowsController@searchlist');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout',function(){Auth::logout();});