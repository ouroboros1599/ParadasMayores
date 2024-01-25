<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanificacionEmpresa extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    //Relación con tabla Planificacion
    public function planificacion()
    {
        return $this->belongsTo(Planificacion::class);
    }

    //Relación con tabla Empresa
    public function empresas()
    {
        return $this->belongsTo(Empresa::class);
    }
}
