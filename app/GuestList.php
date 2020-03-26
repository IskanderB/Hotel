<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestList extends Model
{
  public function goIn($request)
  {
    return $this->insertGetId([
      'num_room' => $request->num_room,
      'id_guest' => $request->id_guest,
      'time_in' => $request->time_in,
      'time_out' => $request->time_out,
      'pay' => $request->pay,
    ]);
  }
}
