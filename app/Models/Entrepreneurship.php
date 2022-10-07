<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrepreneurship extends Model
{
    protected $fillable =
     [
      'id_emprendedor',
      'tiene_emprendimiento',
      'nombre_emprendimiento',
      'descripcion',
      'sector_economico',
      'ubicacion',
  	 ];

    public function Entrepreneur()
    {
        return $this->hasOne('App\Models\Entrepreneur', 'id_emprendedor','id');
    }
    public function Direction()
    {
        return $this->hasOne('App\Models\Direction', 'id_entrepreneurship','id');
    }

    public function LegalData()
    {
        return $this->hasOne('App\Models\LegalData', 'id_emprendimiento','id');
    }

    public function SocialNetworks()
    {
        return $this->hasOne('App\Models\SocialNetworks', 'id_emprendimiento','id');
    }

    public function EconomicData()
    {
        return $this->hasOne('App\Models\EconomicData', 'id_emprendimiento','id');
    }
}
