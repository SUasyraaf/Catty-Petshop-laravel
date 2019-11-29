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

Route::prefix('bookings')->group(function(){
    Route::get('/create', 'BookingController@create')->name('booking:create');
    Route::post('/create', 'BookingController@store')->name('booking:store');
    Route::get('/index', 'BookingController@index')->name('booking:index');

    Route::get('/show/{booking}', 'BookingController@show')->name('booking:show');
    Route::get('/edit/{booking}', 'BookingController@edit')->name('booking:edit');
    Route::post('/edit/{booking}', 'BookingController@update')->name('booking:update');
    Route::get('/delete/{booking}', 'BookingController@delete')->name('booking:delete');
});

Route::prefix('packages')->group(function(){
    Route::get('/create', 'PackageController@create')->name('package:create');
    Route::post('/create', 'PackageController@store')->name('package:store');

    Route::get('/index', 'PackageController@index')->name('package:index');
    Route::get('/show/{package}', 'PackageController@show')->name('package:show');
    Route::get('/edit/{package}', 'PackageController@edit')->name('package:edit');
    Route::post('/edit/{package}', 'PackageController@update')->name('package:update');
    Route::get('/delete/{package}', 'PackageController@delete')->name('package:delete');
});

Route::get('/rooms/index', 'RoomController@index')->name('room:index');

