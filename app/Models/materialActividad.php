<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class materialActividad extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase actividad
    public function actividad()
    {
        return $this->belongsTo(actividad::class);
    }
    //relación con clase material
    public function material()
    {
        return $this->belongsTo(material::class);
    }
}
