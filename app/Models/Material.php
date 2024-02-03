<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase materialActividad
    public function MaterialActividad()
    {
        return $this->hasMany(MaterialActividad::class);
    }
}
