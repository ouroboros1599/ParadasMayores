<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actividad;
use Illuminate\Support\Str;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Actividad::firstOrCreate([
            'NombreActividad' => Str::random(30),
            'OrdenTrabajo' => Str::random(30),
            'Critica' => random_int(0, 1),
            'EstadoActividad' => Str::random(30),
            'planificacion_id' => 1,

        ]);
    }
}
