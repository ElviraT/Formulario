<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public function LegalData()
    {
        return $this->hasOne('App\Models\LegalData', 'id_banco','id');
    }
}
