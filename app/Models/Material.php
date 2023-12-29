<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    // protected $table = 'material';
    protected $primaryKey = 'ID_Material';
    public $timestamps = false;

    protected $fillable = [
        'NombreMaterial',
        'CantidadMaterialRequerida',
        'CantidadMaterialDisponible',
        'Ubicacion',
        'Responsable_ID_Responsable',
    ];

    //Relación con tabla Responsable
    public function responsable()
    {
        return $this->belongsTo(Responsable::class, 'Responsable_ID_Responsable', 'ID_Responsable');
    }

    //Relación con tabla ActividadMaterialTalentoHumano 
    public function actividadesMateriales()
    {
        return $this->hasMany(ActividadMaterialTalentoHumano::class, 'Material_ID_Material', 'ID_Material');
    }
}
