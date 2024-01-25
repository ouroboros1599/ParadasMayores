<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadMaterialTalentoHumano extends Model
{
    public $timestamps = false;
    protected $guraded = [];

    public function actividad()
    {
        return $this->belongsTo(Actividad::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function talentoHumano()
    {
        return $this->belongsTo(TalentoHumano::class);
    }
}
