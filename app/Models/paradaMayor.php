<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParadaMayor extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
    //relación con clase usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
    //relación con clase actividad
    public function actividads()
    {
        return $this->hasMany(Actividad::class);
    }
}
