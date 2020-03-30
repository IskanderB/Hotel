<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeRoom extends Model
{
    public $timestamps = false;

    public function getTypes()
    {
      return $this->select()->get();
    }

    public function deleteType($id)
    {
      $this->where('id', '=', $id)->delete();
    }

    public function appendType($type_room)
    {
      $this->insert([
        'type_room' => $type_room,
      ]);
    }

    public function getType($type_room)
    {
      return $this->select()->where('type_room', '=', $type_room)->get()[0];
    }
}
