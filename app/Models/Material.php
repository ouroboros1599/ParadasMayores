<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //relación con clase tarea
    public function Tareas()
    {
        return $this->belongsToMany(Tarea::class);
    }
}
