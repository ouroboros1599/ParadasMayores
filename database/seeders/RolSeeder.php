<?php

namespace Database\Seeders;

use App\Models\ParadaMayor;
use App\Models\RolUsuario;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::firstOrCreate([
            'nombreUsuario' => 'JESUS CRISTOBAL, CASTILLO MORALES',
            'correo' => '',
            'contrasenia' => '',
            // 'parada_mayor_activa' => ParadaMayor::first()->id,
            'parada_mayor_activa' => 1,
            // 'rol_usuario_id' => 1,
        ]);
        RolUsuario::firstOrCreate([
            'nombreRol' => 'Planificador'
        ]);
        RolUsuario::firstOrCreate([
            'nombreRol' => 'Ejecutor'
        ]);
        RolUsuario::firstOrCreate([
            'nombreRol' => 'Gerente'
        ]);
    }
}
