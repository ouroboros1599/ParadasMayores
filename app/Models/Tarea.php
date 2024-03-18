<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase actividad
    public function actividads()
    {
        return $this->belongsToMany(Actividad::class);
    }
    //relación con clase personal
    public function personals()
    {
        return $this->belongsToMany(Personal::class);
    }
    //relación con clase material
    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }
}
