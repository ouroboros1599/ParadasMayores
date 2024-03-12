<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase paradaMayor
    public function paradaMayor()
    {
        return $this->belongsTo(ParadaMayor::class);
    }
    //realción con clase tarea
    public function tarea()
    {
        return $this->belongsToMany(Tarea::class);
    }
}
