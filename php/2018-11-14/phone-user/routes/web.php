<?php

Route::get('/user', 'UserController@index')->name('user.index');
// Route::get('', function () {
//     return redirect(route('user.index'));
// });
Route::post('/user', 'UserController@store');
Route::delete('/user/{id}', 'UserController@destroy');
Route::get('/user/edit/{id}', 'UserController@edit');
