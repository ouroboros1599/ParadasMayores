<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParadaMayor extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase empresa
    public function Empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
    //relación con clase usuario
    public function Usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
    //relación con clase actividad
    public function Actividad()
    {
        return $this->hasMany(Actividad::class);
    }
}
