<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestRegisterController extends Controller
{
  private $sizes = [
    'guest_name' => 130,
    'sex' => 1,
    'type_doc' => 32,
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
    $this->checkEmpty($request);

    $guest = new Guest();
    $result = $guest->guestRegister($request);
  }

  private function checkEmpty($request)
  {
    foreach ($this->sizes as $key => $value) {
      if($request->$key == '' or strlen($request->$key) > $value) return die('Что то пошло не так :(');
    }
  }
}
