<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HappyController extends Controller
{
  public function index()
  {
    return view('happy.happy');
  }
}
