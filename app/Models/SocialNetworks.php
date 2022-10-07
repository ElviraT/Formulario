<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialNetworks extends Model
{
    protected $fillable =
     [
      'id_emprendimiento',
      'facebook',
      'instagram',
      'twitter'
  	 ];

     public function Entrepreneurship()
    {
        return $this->hasOne('App\Models\Entrepreneurship', 'id_emprendimiento','id');
    }
}
