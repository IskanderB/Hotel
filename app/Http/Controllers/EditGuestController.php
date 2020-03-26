<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class EditGuestController extends Controller
{
  private $sizes = [
    'guest_name' => 130,
    'sex' => 2,
    'type_doc' => 32,
    'num_doc' => 50,
    'born_date' => 30,
    'address' => 200,
  ];

  public function index(Request $request)
  {
    return view('editGuest.editGuest', [
      'guest' => $this->getGuest($request->id_guest),
    ]);
  }

  private function getGuest($id)
  {
    $guest_obj = new Guest();
    return $guest_obj->getGuest($id)[0];
  }

  public function editGuest(Request $request)
  {
    $this->checkEmptySize($request);

    $guest_obj = new Guest();
    $guest = $guest_obj->editGuest($request);

    if($guest) return redirect()->route('happy', ['type' => 'room', 'id' => $guest]);
    else die('Что то пошло не так :(');
  }

  private function checkEmptySize($request)
  {
    foreach ($this->sizes as $key => $value) {
      if($request->$key == '' or strlen($request->$key) > $value) return die('Что то пошло не так :(');
    }
  }
}
