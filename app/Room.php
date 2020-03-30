<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TypeRoom;

class Room extends Model
{
    public $timestamps = false;
    public function appendRoom($request)
    {
      return $this->insertGetId([
        'id' => $request->id,
        'type_room' => $this->getIdType($request->type_room),
        'place_num' => $request->place_num,
        'floor' => $request->floor,
        'num_phone' => $request->num_phone,
        'price' => $request->price,
        'size' => $request->size,
      ]);
    }

    private function getIdType($type_room)
    {
      $type_obj = new TypeRoom();
      return $type_obj->getType($type_room)->id;
    }

    public function getRooms()
    {
      return $this
      ->leftJoin('type_rooms', 'rooms.type_room', '=', 'type_rooms.id')
      ->leftJoin('guest_lists', 'rooms.id', '=', 'guest_lists.num_room')
      ->leftJoin('reservs', 'rooms.id', '=', 'reservs.num_room')
      ->select('rooms.id as id', 'rooms.place_num as place_num', 'rooms.floor as floor',
      'rooms.num_phone as num_phone', 'rooms.price as price', 'rooms.size as size', 'guest_lists.id as g_l_id',
      'reservs.check_reserv as check_reserv', 'type_rooms.type_room as type_room')
      ->get();
    }

    public function getRoom($id)
    {
      return $this
      ->leftJoin('type_rooms', 'rooms.type_room', '=', 'type_rooms.id')
      ->leftJoin('guest_lists', 'rooms.id', '=', 'guest_lists.num_room')
      ->leftJoin('reservs', 'rooms.id', '=', 'reservs.num_room')
      ->select('rooms.id as id', 'rooms.place_num as place_num', 'rooms.floor as floor',
      'rooms.num_phone as num_phone', 'rooms.price as price', 'rooms.size as size', 'guest_lists.id as g_l_id',
      'guest_lists.id_guest as id_guest','reservs.check_reserv as check_reserv', 'type_rooms.type_room as type_room')
      ->where('rooms.id', '=', $id)
      ->get();
    }

    public function editRoom($request)
    {
      if(!$this->checkChanges($request)) return true;

      return $this->where('id', '=', $request->id)->update([
        'type_room' => $this->getIdType($request->type_room),
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
