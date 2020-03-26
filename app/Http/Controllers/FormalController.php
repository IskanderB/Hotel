<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserv;

class FormalController extends Controller
{
  public function index()
  {
    return view('formal.formal', [
      'reservs' => $this->getReservs(),
    ]);
  }

  private function getReservs()
  {
    $reserv_obj = new Reserv();
    return $reserv_obj->getReservs();

  }
}
