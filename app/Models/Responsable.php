<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    // protected $table = 'responsable';
    protected $primaryKey = 'ID_Responsable';
    public $timestamps = false;

    protected $fillable = [
        'NombreResponsable',
        'ApellidoPaternoResponsable',
        'ApellidoMaternoResponsable',
        'Cargo_ID_Cargo',
    ];

    //Relación con tabla Cargo
    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'Cargo_ID_Cargo', 'ID_Cargo');
    }
    
    //Relación con tabla ActividadResponsable
    public function actividad()
    {
        return $this->hasMany(ActividadResponsable::class, 'Responsable_ID_Responsable', 'ID_Responsable');
    }

    //Relación con tabla Material
    public function materiales()
    {
        return $this->hasMany(Material::class, 'Responsable_ID_Responsable', 'ID_Responsable');
    }

    //Relación con tabla TalentoHumano
    public function talentoHumano()
    {
        return $this->hasMany(TalentoHumano::class, 'Responsable_ID_Responsable', 'ID_Responsable');
    }
}
