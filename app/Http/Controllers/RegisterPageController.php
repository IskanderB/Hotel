<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterPageController extends Controller
{
  public function index()
  {
    return view('cust_auth.register');
  }
}
