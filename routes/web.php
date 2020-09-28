<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/thank-you', 'HomeController@thankyou')->name('thankyou');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::resource('admin', 'AdminController');
    Route::resource('tutor', 'TutorController');
    Route::resource('student', 'StudentController');
    Route::resource('group', 'GroupController');
    Route::resource('role', 'RoleController');
});
