<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeRoom;

class TypeRoomController extends Controller
{
  public function index()
  {
    return view('typeRoom.typeRoom', [
      'types' => $this->getTypes(),
    ]);
  }

  public function appendType(Request $request)
  {
    $type_obj = new TypeRoom();
    $type_obj->appendType($request->type_room);
    return redirect('/');
  }

  public function appendPage()
  {
    return view('appTypeRoom.appTypeRoom');
  }

  private function getTypes()
  {
    $type_obj = new TypeRoom();
    return $type_obj->getTypes();
  }

  public function deleteType(Request $request)
  {
    $type_obj = new TypeRoom();
    $type_obj->deleteType($request->id_type);
    return redirect()->back();
  }
}
