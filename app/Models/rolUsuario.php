<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rolUsuario extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase usuario
    public function usuario()
    {
        return $this->hasMany(usuario::class);
    }
}
