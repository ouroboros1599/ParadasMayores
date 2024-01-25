<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TalentoHumano extends Model
{

    public $timestamps = false;

    protected $guarded = [];

    public function responsables()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function actividadesMateriales()
    {
        return $this->hasMany(ActividadMaterialTalentoHumano::class);
    }
}
