<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrepreneur extends Model
{
    protected $fillable =
     [
      'nombres',
      'apellidos',
      'cedula',
      'fecha_nacimiento',
      'correo',
      'telefono',
  	 ];
}
