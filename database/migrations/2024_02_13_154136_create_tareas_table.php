<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('ordenTrabajo')->nullable();
            $table->string('nombreTarea')->nullable();
            $table->integer('cantidadPersonalRequerida')->nullable();
            $table->integer('cantidadMaterialRequerida')->nullable();
            $table->string('estadoTarea')->nullable();
            $table->dateTime('inicioReal')->nullable();
            $table->dateTime('finReal')->nullable();
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
        Schema::dropIfExists('tareas');
    }
}
