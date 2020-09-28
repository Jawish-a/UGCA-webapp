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

Route::group(['prefix' => 'v1'], function () {
    Route::post('register', 'API\AuthController@register');
    Route::post('token', 'API\AuthController@token');
    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::resource('group', 'API\GroupController')->only('index', 'show');
        Route::resource('message', 'API\MessageController')->only('store', 'update', 'destroy');
    });
});


