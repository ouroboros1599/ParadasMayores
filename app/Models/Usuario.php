<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase paradaMayor
    public function ParadaMayor()
    {
        return $this->hasMany(ParadaMayor::class);
    }
    //relación con clase rolUsuario
    public function RolUsuario()
    {
        return $this->belongsTo(RolUsuario::class);
    }
}
