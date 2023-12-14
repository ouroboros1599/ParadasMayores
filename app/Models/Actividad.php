<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'Actividad';
    protected $primaryKey = 'ID_Actividad';
    public $timestamps = false;

    protected $fillable = [
        'NombreActividad',
        'OrdenTrabajo',
        'Critica',
        'EstadoActividad',
        'InicioReal',
        'FinReal',
        'Planificacion_ID_Planificacion',
    ];

    //Relación con tabla de planificación.
    public function planificacion()
    {
        return $this->belongsTo(Planificacion::class, 'Planificacion_ID_Planificacion', 'ID_Planificacion');
    }

    //Relación con tabla de Material_TalentoHumano
    public function materialesTalentoHumano()
    {
        return $this->hasMany(ActividadMaterialTalentoHumano::class, 'Actividad_ID_Actividad', 'ID_Actividad');
    }

    //Relación con tabla Responsable
    public function responsables()
    {
        return $this->hasMany(ActividadResponsable::class, 'Actividad_ID_Actividad', 'ID_Actividad');
    }
}
