<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    public function Direction()
    {
        return $this->hasOne('App\Models\Direction','id');
    }
}
