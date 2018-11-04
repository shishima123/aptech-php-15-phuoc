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

Route::get('/', 'Controller@listUsers');

Route::get('create-user', function () {
    return view('create-user-extends');
});
Route::get('{id}', 'Controller@showUser');

Route::get('{id}/delete', 'Controller@deleteUser');

Route::get('{id}/edit', 'Controller@editUser');
Route::post('{id}/edit', 'Controller@saveButtonEditUser');

Route::get('create-user', 'Controller@createUserForm');
Route::post('create-user', 'Controller@createUserButton');
