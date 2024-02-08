<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadTalentoHumanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('talento_humano_actividad');
        Schema::create('actividad_talento_humano', function (Blueprint $table) {
            $table->integer('actividad_id');
            $table->integer('talento_humano_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('talento_humano_actividad', function (Blueprint $table) {
            $table->integer('actividad_id');
            $table->integer('talento_humano_id');
        });
        Schema::dropIfExists('actividad_talento_humano');
    }
}
