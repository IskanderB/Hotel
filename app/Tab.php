<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\GuestList;

class Tab extends Model
{
  public function createTab($request)
  {
    return $this->insertGetId([
      'num_room' => $request->num_room,
      'id_guest' => $request->id_guest,
      'time_in' => $request->time_in,
      'time_out' => $request->time_out,
      'total_pay' => $this->getOldPay($request->id) + $request->basic_pay + $request->adit_pay,
    ]);
  }

  public function getOldPay($id)
  {
    $guest_list_obj = new GuestList();
    return $guest_list_obj->getOldPay($id);
  }
}
