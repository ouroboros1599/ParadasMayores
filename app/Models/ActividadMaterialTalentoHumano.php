<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadMaterialTalentoHumano extends Model
{
    // protected $table = 'actividad_material_talentohumano';
    protected $primaryKey = 'ID_Nav_ActividadMaterial';
    public $timestamps = false;

    protected $fillable = [
        'Actividad_ID_Actividad',
        'Material_ID_Material',
        'TalentoHuamno_ID_TalentoHumano',
    ];

    //Relación con tabla Actividad
    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'Actividad_ID_Actividad', 'ID_Actividad');
    }

    //Relación con tabla Material
    public function material()
    {
        return $this->belongsTo(Material::class, 'Material_ID_Material', 'ID_Material');
    }

    //Relación con tabla TalentoHumano
    public function talentoHumano()
    {
        return $this->belongsTo(TalentoHumano::class, 'TalentoHumano_ID_TalentoHumano', 'ID_TalentoHumano');
    }
}
