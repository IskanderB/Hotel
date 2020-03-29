<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserv extends Model
{

    public function reservGuest($request)
    {
      return $this->insertGetId([
        'guest_name' => $request->guest_name,
        'num_phone' => $request->num_phone,
        'num_room' => $request->num_room,
        'time_in' => $request->time_in,
        'time_out' => $request->time_out,
        'comment' => $request->comment,
      ]);
    }

    public function getReservs()
    {
      return $this->select()->get();
    }

    public function getReserv($id)
    {
      return $this->select()->where('id', '=', $id)->get();
    }

    public function reservEdit($request)
    {
      $check_reserv_db = $this->getReserv($request->id)[0]->check_reserv;
      // dd($this->checkChanges($check_reserv_db, $request));
      if(!$this->checkChanges($check_reserv_db, $request)) return true;
      // dd('Test');
      return $this->where('id', '=', $request->id)->update([
        'guest_name' => $request->guest_name,
        'num_phone' => $request->num_phone,
        'num_room' => $request->num_room,
        'time_in' => $request->time_in,
        'time_out' => $request->time_out,
        'comment' => $request->comment,
        'reserv_sum' => $request->reserv_sum,
        'check_reserv' => $this->checkCheck($check_reserv_db, $request),
      ]);
    }

    private function checkChanges($check_reserv_db, $request)
    {
      $params = ['guest_name', 'num_phone', 'num_room', 'time_in', 'time_out', 'comment', 'reserv_sum'];
      $reserv_db = $this->getReserv($request->id)[0];
      foreach ($params as $value) {
        if($reserv_db->$value != $request->$value) return true;
      }
      if($check_reserv_db == (boolean)$request->check_reserv) return false;
      else return true;
    }

    private function checkCheck($check_reserv_db, $request)
    {
      if($check_reserv_db == 1) return true;
      elseif($request->check_reserv) return true;
      else false;
    }


}
