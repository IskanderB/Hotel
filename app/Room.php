<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function appendRoom($request)
    {
      return $this->insertGetId([
        'type_room' => $request->type_room,
        'place_num' => $request->place_num,
        'floor' => $request->floor,
        'num_phone' => $request->num_phone,
        'price' => $request->price,
        'size' => $request->size,
      ]);
    }

    public function getRooms()
    {
      return $this->select()->get();
    }

    public function getRoom($id)
    {
      return $this->select()->where('id', '=', $id)->get();
    }

    public function editRoom($request)
    {
      if(!$this->checkChanges($request)) return true;

      return $this->where('id', '=', $request->id)->update([
        'type_room' => $request->type_room,
        'place_num' => $request->place_num,
        'floor' => $request->floor,
        'num_phone' => $request->num_phone,
        'price' => $request->price,
        'size' => $request->size,
      ]);
    }

    private function checkChanges($request)
    {
      $params = ['type_room', 'place_num', 'floor', 'num_phone', 'price', 'size'];
      $room_db = $this->getRoom($request->id)[0];
      // dd([$room_db, $request]);
      foreach ($params as $value) {
        if($room_db->$value != $request->$value) return true;
      }
      return false;
    }

    public function deleteRoom($id)
    {
      return $this->where('id', '=', $id)->delete();
    }
}
