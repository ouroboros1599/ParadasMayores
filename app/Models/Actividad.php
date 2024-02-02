<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase paradaMayor
    public function paradaMayor()
    {
        return $this->belongsTo(paradaMayor::class);
    }
    //relación con clase materialActividad
    public function materialActividad()
    {
        return $this->hasMany(materialActividad::class);
    }
    //relación con clase talentoHumanoActividad
    public function talentoHumanoActividad()
    {
        return $this->hasMany(talentoHumanoActividad::class);
    }
}
