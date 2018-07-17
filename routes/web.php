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

Route::get('/', 'DepanController@index');
Route::get('/tampil', 'DepanController@tampil')->name('tampil');
Route::get('create', 'DepanController@create')->name('create');
Route::post('insert', 'DepanController@insert')->name('insert');
Route::get('delete/{id}', 'DepanController@delete')->name('delete');
Route::get('edit/{id}', 'DepanController@edit')->name('edit');
Route::post('edit/{id}', 'DepanController@submitedit')->name('submitedit');
