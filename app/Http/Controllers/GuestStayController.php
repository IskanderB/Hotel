<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestStayController extends Controller
{
  public function index()
  {
    return view('guestStay.guestStay');
  }
}
