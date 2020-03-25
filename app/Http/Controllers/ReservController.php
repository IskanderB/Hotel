<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservController extends Controller
{
  public function index()
  {
    return view('reserv.reserv');
  }
}
