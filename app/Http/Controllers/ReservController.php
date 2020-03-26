<?php

namespace App\Http\Controllers;
use App\Reserv;

use Illuminate\Http\Request;

class ReservController extends Controller
{
  public function index(Request $request)
  {
    return view('reserv.reserv', [
      'reserv' => $this->getReserv($request->reserv_id)
    ]);
  }

  public function getReserv($id)
  {
    $reserv_obj = new Reserv();
    $reserv = $reserv_obj->getReserv($id);

    if($reserv) return $reserv[0];
    else die('Что то пошло не так :(');
  }

  public function reservEdit(Request $request)
  {
    $this->checkSize($request);

    $reserv_obj = new Reserv();
    $reserv = $reserv_obj->reservEdit($request);

    if($reserv) return redirect()->route('happy', ['type' => 'reserv', 'id' => $request->id]);
    else die('Что то пошло не так :(222');
  }

  public function reservGuest(Request $request)
  {
    $this->checkSize($request);

    $reserv = new Reserv();
    $result = $reserv->reservGuest($request);
    if($result) return redirect()->route('happy', ['type' => 'reserv', 'id' => $result]);
    else die('Что то пошло не так :(');
  }

  private function checkSize($request)
  {
    $this->checkEmpty($request);
    $sizes = [
      'guest_name' => 130,
      'num_phone' => 20,
      'num_room' => 5,
      'time_in' => 130,
      'time_out' => 130,
      'comment' => 300,
    ];

    foreach ($sizes as $key => $value) {
      if(strlen($request->$key) > $value) die('Что то пошло не так :(');
    }
  }

  private function checkEmpty($request)
  {
    $empties = ['guest_name', 'num_phone', 'num_room', 'time_in', 'time_out'];
    foreach ($empties as $value) {
      if($request->$value == '') die('Что то пошло не так :(');
    }
  }
}
