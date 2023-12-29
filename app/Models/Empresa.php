<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    // protected $table = 'empresa';
    protected $primaryKey = 'ID_Empresa';
    public $timestamps = false;

    protected $fillable = [
        'NombreEmpresa',
        'SectorParada',
    ];

    //Relación con tabla PlanificaciónEmpresa
    public function planificacionEmpresa()
    {
        return $this->hasMany(PlanificacionEmpresa::class, 'Empresa_ID_Empresa', 'ID_Empresa');
    }
}
