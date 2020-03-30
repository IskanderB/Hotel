<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeRoom;

class RoomCreateController extends Controller
{
  public function index()
  {
    return view('roomCreate.roomCreate', [
      'types' => $this->getTypes(),
    ]);
  }

  private function getTypes()
  {
    $types = new TypeRoom();
    return $types->getTypes();
  }
}
