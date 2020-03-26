<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserv;
use App\Guest;

class FormalController extends Controller
{
  public function index()
  {
    return view('formal.formal', [
      'reservs' => $this->getReservs(),
      'guests' => $this->getGuests(),
    ]);
  }

  private function getReservs()
  {
    $reserv_obj = new Reserv();
    return $reserv_obj->getReservs();

  }

  private function getGuests()
  {
    $guests_obj = new Guest();
    return $guests_obj->getGuests();
  }
}
