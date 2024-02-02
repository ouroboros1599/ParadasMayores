<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombreActividad');
            $table->string('ordenTrabajo');
            $table->tinyInteger('critica');
            $table->string('estadoActividad');
            $table->dateTime('inicioReal');
            $table->dateTime('finReal');
            $table->timestamps();

            $table->integer('paradaMayor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
