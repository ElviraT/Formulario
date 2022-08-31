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
}
