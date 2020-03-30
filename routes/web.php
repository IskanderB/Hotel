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

Auth::routes();

Route::get('/', 'HomePageController@index')->name('/');
Route::get('/rooms', 'RoomsController@index')->name('rooms');
Route::get('/cust_login', 'LoginPageController@index')->name('cust_login')->middleware('guest');
Route::get('/cust_register', 'RegisterPageController@index')->name('cust_register')->middleware('guest');
Route::get('/room/{num_room}', 'RoomController@index')->name('room')->middleware(['auth', 'is_verify']);
Route::get('/guest/{id_guest}', 'GuestController@index')->name('guest')->middleware(['auth', 'is_verify']);
Route::get('/formal', 'FormalController@index')->name('formal')->middleware(['auth', 'is_verify']);
Route::get('/reserv/{reserv_id}', 'ReservController@index')->name('reserv')->middleware(['auth', 'is_verify']);
Route::get('/guestregister', 'GuestRegisterController@index')->name('guestRegister')->middleware(['auth', 'is_verify']);
Route::get('/gueststay/{num_room}', 'GuestStayController@index')->name('guestStay')->middleware(['auth', 'is_verify']);
Route::get('/guestlist/{num_list}', 'GuestListController@index')->name('guestList')->middleware(['auth', 'is_verify']);
Route::get('/pay/{num_list}', 'PayController@index')->name('pay')->middleware(['auth', 'is_verify']);
Route::post('/reservguest', 'ReservController@reservGuest')->name('reservguest')->middleware(['auth', 'is_verify']);
Route::get('/happy/{type}/{id}', 'HappyController@index')->name('happy')->middleware(['auth', 'is_verify']);
Route::post('/reservedit', 'ReservController@reservEdit')->name('reservedit')->middleware(['auth', 'is_verify']);
Route::post('/guestregisterproc', 'GuestRegisterController@guestRegister')->name('guestregisterproc')->middleware(['auth', 'is_verify']);
Route::post('/goin', 'GuestListController@goIn')->name('goIn')->middleware(['auth', 'is_verify']);
Route::get('/roomcreate', 'RoomCreateController@index')->name('roomcreate')->middleware(['auth', 'is_verify']);
Route::post('/appendroom', 'RoomController@appendRoom')->name('appendroom')->middleware(['auth', 'is_verify']);
Route::get('/editroompage/{num_room}', 'EditRoomController@index')->name('editroom')->middleware(['auth', 'is_verify']);
Route::post('/editroom', 'EditRoomController@editRoom')->name('editroom')->middleware(['auth', 'is_verify']);
Route::get('/deleteroom/{num_room}', 'EditRoomController@deleteRoom')->name('deleteroom')->middleware(['auth', 'is_verify']);
Route::get('/editguestpage/{id_guest}', 'EditGuestController@index')->name('editguestpage')->middleware(['auth', 'is_verify']);
Route::post('/editguest', 'EditGuestController@editGuest')->name('editguest')->middleware(['auth', 'is_verify']);
Route::get('/editguestlistpage/{num_list}', 'EditGuestListController@index')->name('editguestlistpage')->middleware(['auth', 'is_verify']);
Route::post('/editguestlist', 'EditGuestListController@editGuestList')->name('editguestlist')->middleware(['auth', 'is_verify']);
Route::post('/createtab', 'TabController@createTab')->name('createtab')->middleware(['auth', 'is_verify']);
Route::get('/typedoc', 'TypeDocController@index')->name('typedoc')->middleware(['auth', 'is_verify']);
Route::get('/deletetypedoc/{id_type}', 'TypeDocController@deleteType')->name('deletetypedoc')->middleware(['auth', 'is_verify']);
Route::get('/apptypedocpage', 'TypeDocController@appendPage')->name('apptypedocpage')->middleware(['auth', 'is_verify']);
Route::post('/apptypedoc', 'TypeDocController@appendType')->name('apptypedoc')->middleware(['auth', 'is_verify']);
Route::get('/typeroom', 'TypeRoomController@index')->name('typeroom')->middleware(['auth', 'is_verify']);
Route::get('/deletetyperoom/{id_type}', 'TypeRoomController@deleteType')->name('deletetyperoom')->middleware(['auth', 'is_verify']);
Route::get('/apptyperoompage', 'TypeRoomController@appendPage')->name('apptyperoompage')->middleware(['auth', 'is_verify']);
Route::post('/apptyperoom', 'TypeRoomController@appendType')->name('apptyperoom')->middleware(['auth', 'is_verify']);
