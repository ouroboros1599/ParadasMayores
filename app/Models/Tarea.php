<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase actividad
    public function Actividads()
    {
        return $this->belongsToMany(Actividad::class);
    } 
    //relación con clase personal
    public function Personals()
    {
        return $this->belongToMany(Personal::class);
    }
    //relación con clase material
    public function Materials()
    {
        return $this->belongsToMany(Material::class);
    }
}
