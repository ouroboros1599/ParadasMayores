<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function Tareas()
    {
        return $this->belongToMany(Tarea::class);
    }
}
