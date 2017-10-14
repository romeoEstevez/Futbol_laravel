<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{

  public function getEquipoLocal()
  {
    $equipoLocal = $this->EqLocal;
    return $equipoLocal;
  }


}
