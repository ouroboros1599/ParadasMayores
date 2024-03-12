<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relacion con clase paradaMayor
    public function paradaMayor()
    {
        return $this->hasMany(ParadaMayor::class);
    }
}
