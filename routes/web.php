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
    return view('home.index');
}) -> name('homepage');


Route::get('/rooms', function () {
    return view('rooms.index');
}) -> name('rooms');

Route::get('/restaurant', function () {
    return view('restaurant.index');
}) -> name('restaurant');

Route::get('/spa', function () {
    return view('spa.index');
}) -> name('spa');