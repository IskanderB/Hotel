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

  public function index(Request $request)
  {
    return view('guestList.guestList', [
      'guest_list' => $this->getGuestList($request),
    ]);
  }

  private function getGuestList($request)
  {
    $g_list_obj = new GuestList();
    return $g_list_obj->getGuestList($request->num_list)[0];
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
