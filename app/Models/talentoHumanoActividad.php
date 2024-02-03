<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TalentoHumanoActividad extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase actividad
    public function Actividad()
    {
        return $this->belongsTo(Actividad::class);
    }
    //relación con clase rolActividad
    public function RolActividad()
    {
        return $this->belongsTo(RolActividad::class);
    }
    //relación con clase talentoHumano
    public function TalentoHumano()
    {
        return $this->belongsTo(TalentoHumano::class);
    }
}
