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

Route::get('/', 'UserController@index')->name('users.index');

Route::get('{id}', 'UserController@show')->name('users.show')->where('id', '[0-9]+');

Route::get('{id}/delete', 'UserController@destroy')->name('users.destroy');

Route::get('{id}/edit', 'UserController@edit')->where('id', '[0-9]+')->name('users.edit');
Route::post('{id}/edit', 'UserController@update')->where('id', '[0-9]+')->name('users.update');

Route::get('create', 'UserController@create')->name('users.create');
Route::post('create', 'UserController@store')->name('users.store');
// Route::resource('users', 'UserController');
