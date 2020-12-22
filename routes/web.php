<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::post('/logout', 'Auth\LogoutController@logout');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
Route::get('/users', 'Admin\DashboardController@index')->name('users');
Route::get('/profile/{id}', 'Admin\DashboardController@index')->name('profile');

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/