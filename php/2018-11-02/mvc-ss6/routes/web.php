<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
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
