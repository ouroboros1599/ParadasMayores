<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planificacion extends Model
{

    public $timestamps = false;

    protected $guarded = [];

    public function empresas()
    {
        return $this->belongsToMany(Empresa::class);
    }

    public function actividades()
    {
        return $this->hasMany(Actividad::class);
    }
}
