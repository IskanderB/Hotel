<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabController extends Controller
{
    public function createTab(Request $request)
    {
      $tab_pbj = new Tab();
      $tab = $tab_pbj->createTab($request);
      
      if($tab) return redirect()->route('happy', ['type' => 'tab', 'id' => $tab]);
      else die('Что то пошло не так :(');
    }
}
