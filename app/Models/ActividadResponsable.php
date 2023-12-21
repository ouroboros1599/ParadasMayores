<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadResponsable extends Model
{
    protected $table = 'actividad_responsable';
    protected $primaryKey = 'ID_Nav_ActividadResponsable';
    public $timestamps = false;

    protected $fillable = [
        'Actividad_ID_Actividad',
        'Responsable_ID_Actividad',
    ];

    // Relación con tabla Actividad 
    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'Actividad_ID_Actividad', 'ID_Actividad');
    }

    // Relación con tabla Responsable
    public function responsable()
    {
        return $this->belongsTo(Responsable::class, 'Responsable_ID_Responsable', 'ID_Responsable');
    }
}
