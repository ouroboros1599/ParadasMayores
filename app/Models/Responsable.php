<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{

    public $timestamps = false;

    protected $guarded = [];

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }
    
    public function actividad()
    {
        return $this->hasMany(ActividadResponsable::class);
    }

    public function materiales()
    {
        return $this->hasMany(Material::class);
    }

    public function talentoHumano()
    {
        return $this->hasMany(TalentoHumano::class);
    }
}
