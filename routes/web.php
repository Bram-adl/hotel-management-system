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
Route::get('/customers', 'Admin\DashboardController@index')->name('customers');
Route::get('/rooms', 'Admin\DashboardController@index')->name('rooms');
Route::get('/rooms/{id}', 'Admin\DashboardController@index')->name('rooms.detail');
Route::get('/room/types', 'Admin\DashboardController@index')->name('room.types');
Route::get('/room/services', 'Admin\DashboardController@index')->name('room.services');
Route::get('/reservations', 'Admin\DashboardController@index')->name('reservations');
Route::get('/profile/{id}', 'Admin\DashboardController@index')->name('profile');

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'User\HomeController@index')->name('user.home');