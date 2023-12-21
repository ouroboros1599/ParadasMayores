<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'ID_Usuario';
    public $timestamps = false;

    protected $fillable = [
        'NombreUsuario',
        'Correo',
        'Contrasenia',
        'Rol_ID_Rol'
    ];

    //Relación con tabla Rol
    public function roles()
    {
        return $this->belongsTo(Rol::class, 'Rol_ID_Rol', 'ID_Rol');
    }
}
