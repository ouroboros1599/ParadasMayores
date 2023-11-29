<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models_Planificacion extends Model
{
    protected $table = 'Planificacion';
    protected $primaryKey = 'ID_planificacion';
    public $timestamps = false;
}
