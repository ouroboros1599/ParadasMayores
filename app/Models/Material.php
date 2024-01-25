<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{

    public $timestamps = false;

    protected $guarded = [];

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function actividadesMateriales()
    {
        return $this->hasMany(ActividadMaterialTalentoHumano::class);
    }
}
