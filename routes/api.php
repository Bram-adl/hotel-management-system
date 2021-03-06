<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customer', 'API\CustomerController@all');
Route::get('/room', 'API\RoomController@all');
Route::get('/room/type', 'API\RoomTypeController@all');

Route::apiResources([
    'users' => 'API\UserController',
    'customers' => 'API\CustomerController',
    'rooms' => 'API\RoomController',
    'room/types' => 'API\RoomTypeController',
    'room/services' => 'API\RoomServiceController',
    'reservations' => 'API\ReservationController',
]);