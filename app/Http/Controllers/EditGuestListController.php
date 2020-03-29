<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuestList;

class EditGuestListController extends Controller
{
  private $sizes = [
    'time_out' => 30,
  ];

  public function index(Request $request)
  {
    return view('editGuestList.editGuestList', [
      'guest_list' => $this->getGuestList($request),
    ]);
  }

  private function getGuestList($request)
  {
    $g_list_obj = new GuestList();
    return $g_list_obj->getGuestList($request->num_list)[0];
  }

  public function editGuestList(Request $request)
  {
    $this->checkEmptySize($request);

    $g_list_obj = new GuestList();
    $g_list = $g_list_obj->editGuestList($request);

    if($g_list) return redirect()->route('happy', ['type' => 'room', 'id' => $g_list]);
    else die('Что то пошло не так :(');
  }

  private function checkEmptySize($request)
  {
    foreach ($this->sizes as $key => $value) {
      if($request->$key == '' or strlen($request->$key) > $value) return die('Что то пошло не так :(');
    }
  }
}
