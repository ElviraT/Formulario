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

    public function Entrepreneurship()
    {
        return $this->hasOne('App\Models\Entrepreneurship', 'id_entrepreneurship','id');
    }
    public function State()
    {
        return $this->hasOne('App\Models\State', 'id','id_state');
    }
    public function Municipality()
    {
        return $this->hasOne('App\Models\Municipality', 'id','id_municipality');
    }
    public function Parish()
    {
        return $this->hasOne('App\Models\Parish', 'id','id_parish');
    }
}
