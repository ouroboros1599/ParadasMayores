<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rolActividad extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase talentoHumanoActividad
    public function talentoHumanoActividad()
    {
        return $this->hasMany(talentoHumanoActividad::class);
    }
}
