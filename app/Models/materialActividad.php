<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialActividad extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase actividad
    public function Actividad()
    {
        return $this->belongsTo(Actividad::class);
    }
    //relación con clase material
    public function Material()
    {
        return $this->belongsTo(Material::class);
    }
}
