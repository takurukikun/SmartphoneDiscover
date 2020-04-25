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

Route::get('/',  'HomeController@index');
Route::get('smartphones',  'SmartphoneController@index');
Route::get('smartphones/form',  'SmartphoneController@form')->middleware('auth');
Route::get('smartphones/{smartphones}/view',  'SmartphoneController@view');
Route::get('smartphones/{smartphones}/edit/',  'SmartphoneController@edit')->middleware('auth');
Route::patch('smartphones/{smartphones}',  'SmartphoneController@update');
Route::delete('smartphones/{smartphones}',  'SmartphoneController@delete');
Route::post('smartphones/save',  'SmartphoneController@save');

Auth::routes();

Route::get('/home/beginner', 'HomeController@beginner')->name('beginner');
Route::post('/home/beginnerSave', 'HomeController@beginnerSave')->name('beginnerSave');
Route::get('/home/intermediate', 'HomeController@intermediate')->name('intermediate');
Route::post('/home/intermediateSave', 'HomeController@intermediateSave')->name('intermediateSave');
Route::get('/home/advanced', 'HomeController@advanced')->name('advanced');
Route::post('/home/advancedSave', 'HomeController@advancedSave')->name('advancedSave');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/smartphones/fetch', 'SmartphoneController@fetch')->name('smartphones.fetch');
