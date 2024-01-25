<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function planificacionEmpresa()
    {
        return $this->hasMany(PlanificacionEmpresa::class);
    }
}
