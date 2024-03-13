<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('actividad_talento_humano');
        Schema::create('personal_tarea', function (Blueprint $table) {
            $table->integer('personal_id')->nullable();
            $table->integer('tarea_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('actividad_talento_humano', function (Blueprint $table) {
            $table->integer('actividad_id')->nullable();
            $table->integer('talento_humano_id')->nullable();
        });

        Schema::dropIfExists('personal_tarea');
    }
}
