<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
{
  public function index(Request $request)
  {
    return view('guest.guest', [
      'guest' => $this->getGuest($request->id_guest),
    ]);
  }

  private function getGuest($id)
  {
    $guest_obj = new Guest();
    return $guest_obj->getGuest($id)[0];
  }
}
