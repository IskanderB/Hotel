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
Route::get('/gueststay/{num_room}', 'GuestStayController@index')->name('guestStay')->middleware('guest');
Route::get('/guestlist/{num_list}', 'GuestListController@index')->name('guestList')->middleware('guest');
Route::get('/pay/{num_list}', 'PayController@index')->name('pay')->middleware('guest');
Route::post('/reservguest', 'ReservController@reservGuest')->name('reservguest')->middleware('guest');
Route::get('/happy/{type}/{id}', 'HappyController@index')->name('happy')->middleware('guest');
Route::post('/reservedit', 'ReservController@reservEdit')->name('reservedit')->middleware('guest');
Route::post('/guestregisterproc', 'GuestRegisterController@guestRegister')->name('guestregisterproc')->middleware('guest');
Route::post('/goin', 'GuestListController@goIn')->name('goIn')->middleware('guest');
Route::get('/roomcreate', 'RoomCreateController@index')->name('roomcreate')->middleware('guest');
Route::post('/appendroom', 'RoomController@appendRoom')->name('appendroom')->middleware('guest');
Route::get('/editroompage/{num_room}', 'EditRoomController@index')->name('editroom')->middleware('guest');
Route::post('/editroom', 'EditRoomController@editRoom')->name('editroom')->middleware('guest');
Route::get('/deleteroom/{num_room}', 'EditRoomController@deleteRoom')->name('deleteroom')->middleware('guest');
Route::get('/editguestpage/{id_guest}', 'EditGuestController@index')->name('editguestpage')->middleware('guest');
Route::post('/editguest', 'EditGuestController@editGuest')->name('editguest')->middleware('guest');
Route::get('/editguestlistpage/{num_list}', 'EditGuestListController@index')->name('editguestlistpage')->middleware('guest');
Route::post('/editguestlist', 'EditGuestListController@editGuestList')->name('editguestlist')->middleware('guest');
