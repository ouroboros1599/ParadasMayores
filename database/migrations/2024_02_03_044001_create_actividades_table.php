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
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('nombreActividad');
            $table->string('ordenTrabajo');
            $table->tinyInteger('critica')->nullable();
            $table->string('estadoActividad')->nullable();
            $table->dateTime('inicioReal')->nullable();
            $table->dateTime('finReal')->nullable();
            $table->timestamps();

            $table->integer('paradaMayor_id')->nullable();
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
