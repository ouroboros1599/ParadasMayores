<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentoHumanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talento_humanos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreTalento', 50);
            $table->integer('CantidadTalentoHumanoRequerido');
            $table->integer('CantidadTalentoHumanoDisponible');

            $table->integer('responsable_id');

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
        Schema::dropIfExists('talento_humanos');
    }
}
