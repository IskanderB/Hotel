<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
  private $sizes = [
    'place_num' => 2,
    'floor' => 3,
    'num_phone' => 30,
    'price' => 200,
    'size' => 2,
  ];

  public function index(Request $request)
  {
    return view('room.room', [
      'room' => $this->getRoom($request->num_room),
    ]);
  }

  private function getRoom($id)
  {
    $room_obj = new Room();
    return $room_obj->getRoom($id)[0];
  }

  public function appendRoom(Request $request)
  {
    $this->checkEmptySize($request);

    $room_obj = new Room();
    $room = $room_obj->appendRoom($request);

    if($room) return redirect()->route('happy', ['type' => 'room', 'id' => $room]);
    else die('Что то пошло не так :(');
  }

  private function checkEmptySize($request)
  {
    foreach ($this->sizes as $key => $value) {
      if($request->$key == '' or strlen($request->$key) > $value) return die('Что то пошло не так :(');
    }
  }
}
