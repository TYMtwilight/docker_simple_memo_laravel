<?php

Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm') -> name('login.index');
Route::post('/user/register','App\Http\Controllers\Auth\RegisterController@register')->name('user.exec.register');
Route::get('/user', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('user.register');
Route::get('/memo', function () {
    return view("memo");
})->name('memo.index');

Auth::routes();
