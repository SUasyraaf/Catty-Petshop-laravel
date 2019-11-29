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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/bookings/create', 'BookingController@create')->name('create');
Route::post('/bookings/create', 'BookingController@store')->name('store');
Route::get('/bookings/index', 'BookingController@index')->name('booking:index');

Route::get('/packages/index', 'PackageController@index')->name('package:index');

Route::get('/rooms/index', 'RoomController@index')->name('room:index');

