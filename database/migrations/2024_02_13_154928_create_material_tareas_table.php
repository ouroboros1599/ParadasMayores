<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('material_actividad');
        Schema::create('material_tareas', function (Blueprint $table) {
            $table->integer('tarea_id')->nullable();
            $table->integer('material_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('material_actividad', function (Blueprint $table) {
            $table->id();
            $table->integer('materialRequerido')->nullable();
            $table->timestamps();
        });
        
        Schema::dropIfExists('material_tareas');
    }
}
