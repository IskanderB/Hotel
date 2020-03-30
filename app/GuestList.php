<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reserv;

class GuestList extends Model
{
  public function goIn($request)
  {
    $reserv_sum = $this->getReservSum($request->id_reserv);
    $this->deleteReserv($request->id_reserv, $reserv_sum);

    return $this->insertGetId([
      'num_room' => $request->num_room,
      'id_guest' => $request->id_guest,
      'time_in' => $request->time_in,
      'time_out' => $request->time_out,
      'pay' => $request->pay + $reserv_sum,
    ]);
  }

  private function deleteReserv($id, $reserv_sum)
  {
    if($reserv_sum){
      $reserv_obj = new Reserv();
      $reserv_obj->deleteReserv($id);
    }
  }

  private function getReservSum($id)
  {
    $reserv_obj = new Reserv();
    return $reserv_obj->getReserv($id)[0]->reserv_sum;
  }

  public function getGuestList($num_list)
  {
    return $this->select()->where('id', '=', $num_list)->get();
  }

  public function getOldPay($id)
  {
    return $this->select('pay')->where('id', '=', $id)->get();
  }

  public function editGuestList($request)
  {

    if(!$this->checkChanges($request)) return true;

    return $this->where('id', '=', $request->id)->update([
      'time_out' => $request->time_out,
      'pay' => $request->pay + $this->getOldPay($request->id)[0]->pay,
    ]);
  }

  private function checkChanges($request)
  {
    $params = ['time_out',];
    $g_list_db = $this->getGuestList($request->id)[0];
    // dd([$room_db, $request]);
    foreach ($params as $value) {
      if($g_list_db->$value != $request->$value) return true;
    }
    if($request->pay) return true;
    else return false;
  }
}
