<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models_Actividad extends Model
{
    protected $table = 'Actividad';
    protected $primaryKey = 'ID_Actividad';
    public $timestamps = false;
}
