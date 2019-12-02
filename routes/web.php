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
    Route::get('/delete/{booking}', 'BookingController@destroy')->name('booking:delete');
});

Route::prefix('packages')->group(function(){
    Route::get('/create', 'PackageController@create')->name('package:create');
    Route::post('/create', 'PackageController@store')->name('package:store');

    Route::get('/index', 'PackageController@index')->name('package:index');
    Route::get('/show/{package}', 'PackageController@show')->name('package:show');
    Route::get('/edit/{package}', 'PackageController@edit')->name('package:edit');
    Route::post('/edit/{package}', 'PackageController@update')->name('package:update');
    Route::get('/delete/{package}', 'PackageController@destroy')->name('package:delete');
});

Route::prefix('rooms')->group(function(){
    Route::get('/create', 'RoomController@create')->name('room:create');
    Route::post('/create', 'RoomController@store')->name('room:store');

    Route::get('/index', 'RoomController@index')->name('room:index');
    Route::get('/show/{room}', 'RoomController@show')->name('room:show');
    Route::get('/edit/{room}', 'RoomController@edit')->name('room:edit');
    Route::post('/edit/{room}', 'RoomController@update')->name('room:update');
    Route::get('/delete/{room}', 'RoomController@destroy')->name('room:delete');
});

Route::prefix('cats')->group(function(){
    Route::get('/create', 'CatController@create')->name('cat:create');
    Route::post('/create', 'CatController@store')->name('cat:store');

    Route::get('/index', 'CatController@index')->name('cat:index');
    // Route::get('/show/{package}', 'RoomController@show')->name('room:show');
    // Route::get('/edit/{package}', 'RoomController@edit')->name('room:edit');
    // Route::post('/edit/{package}', 'RoomController@update')->name('room:update');
    // Route::get('/delete/{package}', 'RoomController@destroy')->name('room:delete');
});

Route::prefix('cats')->group(function(){
    Route::get('/create', 'CatController@create')->name('cat:create');
    Route::post('/create', 'CatController@store')->name('cat:store');

    Route::get('/index', 'CatController@index')->name('cat:index');
    Route::get('/show/{package}', 'CatController@show')->name('cat:show');
    Route::get('/edit/{package}', 'CatController@edit')->name('cat:edit');
    Route::post('/edit/{package}', 'CatController@update')->name('cat:update');
    Route::get('/delete/{package}', 'CatController@destroy')->name('cat:delete');
});

Route::prefix('users')->group(function(){
    Route::get('/create', 'UserController@create')->name('user:create');
    Route::post('/create', 'UserController@store')->name('user:store');

    Route::get('/index', 'UserController@index')->name('user:index');
    Route::get('/show/{package}', 'UserController@show')->name('user:show');
    Route::get('/edit/{package}', 'UserController@edit')->name('user:edit');
    Route::post('/edit/{package}', 'UserController@update')->name('user:update');
    Route::get('/delete/{package}', 'UserController@destroy')->name('user:delete');
});
