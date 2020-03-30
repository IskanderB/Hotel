<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeDoc;

class TypeDocController extends Controller
{
  public function index()
  {
    return view('typeDoc.typeDoc', [
      'types' => $this->getTypes(),
    ]);
  }

  public function appendType(Request $request)
  {
    $type_obj = new TypeDoc();
    $type_obj->appendType($request->type_doc);
    return redirect('/');
  }

  public function appendPage()
  {
    return view('appTypeDoc.appTypeDoc');
  }

  private function getTypes()
  {
    $type_obj = new TypeDoc();
    return $type_obj->getTypes();
  }

  public function deleteType(Request $request)
  {
    $type_obj = new TypeDoc();
    $type_obj->deleteType($request->id_type);
    return redirect()->back();
  }
}
