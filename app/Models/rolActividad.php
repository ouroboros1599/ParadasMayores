<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolActividad extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase talentoHumanoActividad
    public function TalentoHumanoActividad()
    {
        return $this->hasMany(TalentoHumanoActividad::class);
    }
}
