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


//Admin routes
Route::get('/admin/rooms', 'BookingController@showRooms') -> name('admin.rooms');

Route::get('/admin/bookings/{idRoom}', 'BookingController@showRoomBookings') -> name('admin.bookings');

Route::get('/admin/bookings/delete/{idBooking}', 'BookingController@deleteBooking') -> name('admin.bookingdelete');

Route::get('/admin/add', 'BookingController@getRoomsNumber') -> name('admin.newbooking');

Route::post('/admin/add/reservation', 'BookingController@addBooking') -> name('admin.bookingadd');
