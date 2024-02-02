<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentoHumanoActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talento_humano_actividad', function (Blueprint $table) {
            $table->id(['talentoHumano_id','actividad_id']);
            $table->integer('cantidadTalentoHumanoRequerida');
            $table->timestamps();

            $table->integer('rolActividad_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talento_humano_actividad');
    }
}
