<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestRegisterController extends Controller
{
  private $sizes = [
    'guest_name' => 130,
    'sex' => 1,
    'num_doc' => 50,
    'born_date' => 30,
    'address' => 200,
  ];
  public function index()
  {
    return view('guestRegister.guestRegister');
  }

  public function guestRegister(Request $request)
  {
    $this->checkEmptySize($request);

    $guest_obj = new Guest();
    $guest = $guest_obj->guestRegister($request);

    if($guest) return redirect()->route('happy', ['type' => 'guest', 'id' => $guest]);
    else die('Что то пошло не так :(');
  }

  private function checkEmptySize($request)
  {
    foreach ($this->sizes as $key => $value) {
      if($request->$key == '' or strlen($request->$key) > $value) return die('Что то пошло не так :(');
    }
  }
}
