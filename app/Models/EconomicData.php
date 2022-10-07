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

    public function Entrepreneurship()
    {
        return $this->hasOne('App\Models\Entrepreneurship', 'id_emprendimiento','id');
    }

    public function Average()
    {
        return $this->hasOne('App\Models\Average','id','id_promedio');
    }
}
