<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TypeDoc;

class Guest extends Model
{
    public function guestRegister($request)
    {
      return $this->insertGetId([
        'guest_name' => $request->guest_name,
        'sex' => $request->sex,
        'type_doc' => $this->getIdType($request->type_doc),
        'num_doc' => $request->num_doc,
        'born_date' => $request->born_date,
        'address' => $request->address,
      ]);
    }

    private function getIdType($type_doc)
    {
      $type_obj = new TypeDoc();
      return $type_obj->getType($type_doc)->id;
    }

    public function getGuests()
    {
      return $this->select()
      ->join('type_docs', 'guests.type_doc', '=', 'type_docs.id')
      ->get();
    }

    public function getGuest($id)
    {
      return $this->select()->where('id', '=', $id)->get();
    }

    public function editGuest($request)
    {
      if(!$this->checkChanges($request)) return true;

      return $this->where('id', '=', $request->id)->update([
        'guest_name' => $request->guest_name,
        'sex' => $request->sex,
        'type_doc' => $request->type_doc,
        'num_doc' => $request->num_doc,
        'born_date' => $request->born_date,
        'address' => $request->address,
      ]);
    }

    private function checkChanges($request)
    {
      $params = ['guest_name', 'sex', 'type_doc', 'num_doc', 'born_date', 'address'];
      $room_db = $this->getGuest($request->id)[0];
      // dd([$room_db, $request]);
      foreach ($params as $value) {
        if($room_db->$value != $request->$value) return true;
      }
      return false;
    }
}
