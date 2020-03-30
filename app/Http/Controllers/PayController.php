<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuestList;

class PayController extends Controller
{
    public function index(Request $request)
    {
      return view('pay.pay', [
        'guest_list' => $this->getGuestList($request),
      ]);
    }

    private function getGuestList($request)
    {
      $guest_list_obj = new GuestList();
      return $guest_list_obj->getGuestList($request->num_list)[0];
    }
}
