<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models_Empresa extends Model
{
    protected $table = 'Empresa';
    protected $primaryKey = 'ID_Empresa';
    public $timestamps = false;
}
