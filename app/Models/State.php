<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function Direction()
    {
        return $this->hasOne('App\Models\Direction','id');
    }
}
