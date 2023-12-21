<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargo';
    protected $primaryKey = 'ID_Cargo';
    public $timestamps = false;

    protected $fillable = [
        'NombreCargo',
    ];

    // Relación con tabla Responsable
    public function responsable()
    {
        return $this->hasMany(Responsable::class, 'Cargo_ID_Cargo', 'ID_Cargo');
    }
}
