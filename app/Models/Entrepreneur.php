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
      'codigo',
  	 ];

    public function Entrepreneurship()
    {
        return $this->hasOne('App\Models\Entrepreneurship', 'id_emprendedor','id');
    }

    public function Formation()
    {
        return $this->hasOne('App\Models\Formation', 'id_emprendedor','id');
    }
}
