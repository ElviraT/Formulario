<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrepreneurship extends Model
{
    protected $fillable =
     [
      'id_emprendedor',
      'tiene_emprendimiento',
      'nombre_emprendimiento',
      'descripcion',
      'sector_economico',
      'ubicacion',
  	 ];
}
