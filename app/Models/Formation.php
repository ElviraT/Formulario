<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable =
     [
      'id_emprendedor',
      'tanalisis',
      'tmarketing',
      'tjuridico',
      'comercializacion',
      'otaller',
  	 ];

     public function Entrepreneur()
    {
        return $this->hasOne('App\Models\Entrepreneur', 'id_emprendedor','id');
    }
}
