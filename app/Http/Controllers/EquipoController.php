<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;

class EquipoController extends Controller
{

  public function list(){
  $equipos = Equipo::paginate(5);
  return view('lists', ["list" => $equipos]);
  }


}
