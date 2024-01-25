<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    public $timestamps = false;

    protected $guarded = [];
    
    public function roles()
    {
        return $this->belongsTo(Rol::class);
    }
}
