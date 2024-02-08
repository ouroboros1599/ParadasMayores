<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TalentoHumano extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase talentoHumanoActividad
    public function actividads()
    {
        return $this->belongsToMany(Actividad::class);
    }
}
