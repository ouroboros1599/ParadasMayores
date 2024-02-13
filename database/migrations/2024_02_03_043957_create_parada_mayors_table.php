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
            $table->tinyInteger('activo')->nullable();
            $table->string('nombreParada')->nullable();
            $table->string('sectorParada')->nullable();
            $table->dateTime('inicioPlanificado')->nullable();
            $table->dateTime('finPlanificado')->nullable();
            $table->timestamps();

            $table->integer('empresa_id')->nullable();
            $table->integer('usuario_id')->nullable();
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
