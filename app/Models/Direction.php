<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $fillable =
     [
      'id_entrepreneurship',
      'id_state',
      'id_municipality',
      'id_parish',
  	 ];
}
