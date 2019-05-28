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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::get('/check_xml', 'WorldController@check_xml')->middleware('auth')->name('check_xml');
Route::post('/ajax/check_xml', 'AjaxWorldController@check_xml')->middleware('auth')->name('ajax_check_xml');

Route::get('/stats', 'WorldController@stats')->middleware('auth')->name('stats');
Route::post('/ajax/stats', 'AjaxWorldController@stats')->middleware('auth')->name('ajax_stats');
