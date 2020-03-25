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

Route::get('/', 'HomePageController@index')->name('/')->middleware('guest');
Route::get('/rooms', 'RoomsController@index')->name('rooms')->middleware('guest');
Route::get('/room/{num_room}', 'RoomController@index')->name('room')->middleware('guest');
Route::get('/guest/{id_guest}', 'GuestController@index')->name('guest')->middleware('guest');
Route::get('/formal', 'FormalController@index')->name('formal')->middleware('guest');
Route::get('/reserv/{reserv_id}', 'ReservController@index')->name('reserv')->middleware('guest');
Route::get('/guestregister', 'GuestRegisterController@index')->name('guestRegister')->middleware('guest');
