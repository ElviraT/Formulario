<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Average extends Model
{
    public function EconomicData()
    {
        return $this->hasOne('App\Models\EconomicData','id_promedio','id');
    }
}
