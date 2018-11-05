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

Route::get('/', 'UserController@index');

Route::get('{id}', 'UserController@show')->where('id', '[0-9]+');

Route::get('{id}/delete', 'UserController@destroy');

Route::get('{id}/create', function () {
    return redirect('create');
});

Route::get('{id}/edit', 'UserController@edit');
Route::post('{id}/edit', 'UserController@update');

Route::get('create', 'UserController@create');
Route::post('create', 'UserController@store');
// Route::resource('users', 'UserController');
