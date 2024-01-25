<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadResponsable extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function actividad()
    {
        return $this->belongsTo(Actividad::class);
    }

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }
}
