<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase paradaMayor
    public function ParadaMayor()
    {
        return $this->belongsTo(ParadaMayor::class);
    }
    //relación con clase materialActividad
    public function MaterialActividad()
    {
        return $this->hasMany(MaterialActividad::class);
    }
    //relación con clase talentoHumanoActividad
    public function TalentoHumanoActividad()
    {
        return $this->hasMany(TalentoHumanoActividad::class);
    }
}
