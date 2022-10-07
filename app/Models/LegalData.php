<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalData extends Model
{
    protected $fillable =
     [
      'id_emprendimiento',
      'figura_juridica',
      'firma_personal',
      'pyme',
      'compania_anonima',
      'requiere_financiamiento',
      'monto_estimado',
      'posee_cuenta',
      'id_banco',
      'id_bancoA',
  	 ];

    public function Entrepreneurship()
    {
        return $this->hasOne('App\Models\Entrepreneurship', 'id_emprendimiento','id');
    }

    public function Bank()
    {
        return $this->hasOne('App\Models\Bank','id');
    }
}
