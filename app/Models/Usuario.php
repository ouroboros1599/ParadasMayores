<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase paradaMayor
    public function paradaMayor()
    {
        return $this->hasMany(paradaMayor::class);
    }
    //relación con clase rolUsuario
    public function rolUsuario()
    {
        return $this->belongsTo(rolUsuario::class);
    }
}
