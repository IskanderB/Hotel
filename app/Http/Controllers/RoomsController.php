<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomsController extends Controller
{
    public function index()
    {
      return view('rooms.rooms', [
        'rooms' => $this->getRooms(),
      ]);
    }

    private function getRooms()
    {
      $rooms_obj = new Room();
      return $rooms_obj->getRooms();
    }
}
