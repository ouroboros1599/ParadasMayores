<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('NombreActividad',50);
            $table->string('OrdenTrabajo', 50);
            $table->tinyInteger('Critica');
            $table->string('EstadoActividad', 50);
            $table->dateTime('InicioReal')->nullable();
            $table->dateTime('FinReal')->nullable();
            
            $table->integer('planificacion_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividads');
    }
}
