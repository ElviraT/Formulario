<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
	protected $table = 'images';
    protected $fillable =
     [
      'id_emprendimiento',
      'registro_mercantil',
      'cedula',
      'rif',
      'certificado_emprende',
  	 ];
}
