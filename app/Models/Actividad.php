<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function planificacion()
    {
        return $this->belongsTo(Planificacion::class);
    }

    public function materialesTalentoHumano()
    {
        return $this->hasMany(ActividadMaterialTalentoHumano::class);
    }

    public function responsables()
    {
        return $this->hasMany(ActividadResponsable::class);
    }
}
