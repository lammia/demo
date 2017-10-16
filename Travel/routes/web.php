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

Route::get('login', 'MyController@getForm');

Route::get('index', function () {
    return view('index');
});
Route::get('adduser', function () {
    return view('adduser');
});
Route::get('addplace', function () {
    return view('addplace');
});
Route::get('addevent', function () {
    return view('addEvent');
});
Route::get('addfestival', function () {
    return view('addFestival');
});
Route::get('user', function () {
    return view('user');
});
Route::get('place', function () {
    return view('place');
});
Route::get('event', function () {
    return view('event');
});
Route::get('festival', function () {
    return view('festival');
});