<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class paradaMayor extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase empresa
    public function empresa()
    {
        return $this->belongsTo(empresa::class);
    }
    //relación con clase usuario
    public function usuario()
    {
        return $this->belongsTo(usuario::class);
    }
    //relación con clase actividad
    public function actividad()
    {
        return $this->hasMany(actividad::class);
    }
}
