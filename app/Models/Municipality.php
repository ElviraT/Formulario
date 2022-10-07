<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    public function Direction()
    {
        return $this->hasOne('App\Models\Direction','id');
    }
}
