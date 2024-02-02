<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase materialActividad
    public function materialActividad()
    {
        return $this->hasMany(materialActividad::class);
    }
}
