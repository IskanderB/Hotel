<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeDoc extends Model
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

    public function appendType($type_doc)
    {
      $this->insert([
        'type_doc' => $type_doc,
      ]);
    }

    public function getType($type_doc)
    {
      return $this->select()->where('type_doc', '=', $type_doc)->get()[0];
    }

}
