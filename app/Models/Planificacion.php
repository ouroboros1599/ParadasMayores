<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planificacion extends Model
{
    protected $table = 'planificacion';
    protected $primaryKey = 'ID_Planificacion';
    public $timestamps = false;

    protected $fillable = [
        'NombreParada',
        'FechaInicioPlanificada',
        'FechaTerminoPlanificada',
    ];

    //Relación con tabla PlanificacionEmpresa
    public function empresas()
    {
        return $this->belongsToMany(Empresa::class, 'Planificacion_Empresa', 'Planificacion_ID_Planificacion', 'Empresa_ID_Empresa');
    }

    //Relacion con tabla Actividad
    public function actividades()
    {
        return $this->hasMany(Actividad::class, 'Planificacion_ID_Planificacion', 'ID_Planificacion');
    }
}
