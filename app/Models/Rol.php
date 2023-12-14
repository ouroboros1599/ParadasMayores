<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'Rol';
    protected $primaryKey = 'ID_Rol';
    public $timestamps = false;

    protected $fillable =[
        'NombreRol',
    ];

    //Relación con tabla Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'Rol_ID_Rol', 'ID_Rol');
    }
}
