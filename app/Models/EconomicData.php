<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EconomicData extends Model
{
    protected $fillable =
     [
      'id_emprendimiento',
      'id_promedio',
      'faov',
      'inces',
      'ivss',
      'sumar',
      'otra',
  	 ];
}
