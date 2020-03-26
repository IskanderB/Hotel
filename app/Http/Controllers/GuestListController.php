<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuestList;

class GuestListController extends Controller
{
  private $sizes = [
    'num_room' => 10,
    'id_guest' => 10,
    'time_in' => 30,
    'time_out' => 30,
    'pay' => 30,
  ];

  public function index()
  {
    return view('guestList.guestList');
  }

  public function goIn(Request $request)
  {
    $this->checkEmptySize($request);

    $g_list_obj = new GuestList();
    $g_list = $g_list_obj->goIn($request);

    if($g_list) return redirect()->route('happy', ['type' => 'guest_list', 'id' => $g_list]);
    else die('Что то пошло не так :(');
  }

  private function checkEmptySize($request)
  {
    foreach ($this->sizes as $key => $value) {
      if($request->$key == '' or strlen($request->$key) > $value) return die('Что то пошло не так :(');
    }
  }
}
