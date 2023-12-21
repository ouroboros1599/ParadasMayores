<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanificacionEmpresa extends Model
{
    protected $table = 'planificacion_empresa';
    protected $primaryKey = 'ID_PlanificacionEmpresa';
    public $timestamps = false;

    protected $fillable = [
        'Planificacion_ID_Planificacion',
        'Empresa_ID_Empresa',
    ];

    //Relación con tabla Planificacion
    public function planificacion()
    {
        return $this->belongsTo(Planificacion::class, 'Planificacion_ID_Planificacion', 'ID_Planificacion');
    }

    //Relación con tabla Empresa
    public function empresas()
    {
        return $this->belongsTo(Empresa::class, 'Empresa_ID_Empresa', 'ID_Empresa');
    }
}
