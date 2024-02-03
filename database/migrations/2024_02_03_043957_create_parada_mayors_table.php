<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParadaMayorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parada_mayors', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('activo');
            $table->string('nombreParada');
            $table->string('sectorParada');
            $table->dateTime('inicioPlanificado');
            $table->dateTime('finPlanificado');
            $table->timestamps();

            $table->integer('empresa_id');
            $table->integer('usuario_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parada_mayors');
    }
}
