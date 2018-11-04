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

Route::get('/', 'Controller@tableUsers');
// Route::get('/', function () {
//     return view('list-user-extends');
// });

Route::get('create-user', function () {
    return view('create-user-extends');
});
Route::get('{id}', 'Controller@showUser');
Route::get('{id}/edit', 'Controller@editUser');

Route::get('test-edit', function () {
    return view('edit-user-extends');
});
