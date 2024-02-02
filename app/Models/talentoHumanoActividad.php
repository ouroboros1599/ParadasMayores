<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class talentoHumanoActividad extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase actividad
    public function actividad()
    {
        return $this->belongsTo(actividad::class);
    }
    //relación con clase rolActividad
    public function rolActividad()
    {
        return $this->belongsTo(rolActividad::class);
    }
    //relación con clase talentoHumano
    public function talentoHumano()
    {
        return $this->belongsTo(talentoHumano::class);
    }
}
