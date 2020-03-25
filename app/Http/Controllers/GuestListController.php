<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestListController extends Controller
{
  public function index()
  {
    return view('guestList.guestList');
  }
}
