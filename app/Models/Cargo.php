<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function responsable()
    {
        return $this->hasMany(Responsable::class);
    }
}
