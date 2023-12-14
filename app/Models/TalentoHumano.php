<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentoHumano extends Model
{
    protected $table = 'TalentoHumano';
    protected $primaryKey = 'ID_TalentoHumano';
    public $timestamps = false;

    protected $fillable =[
        'NombreTalento',
        'CantidadTalentoHumanoRequerido',
        'CantidadTalentoHumanoDisponible',
        'Responsable_ID_Responsable',
    ];

    //Relación con tabla responsable
    public function responsables()
    {
        return $this->belongsTo(Responsable::class, 'Responsable_ID_Responsable', 'ID_Responsable');
    }

    //Relación con tabla actvidadMaterialTalentoHumano
    public function actividadesMateriales()
    {
        return $this->hasMany(ActividadMaterialTalentoHumano::class, 'TalentoHumano_ID_TalentoHumano', 'ID_TalentoHumano');
    }
}
