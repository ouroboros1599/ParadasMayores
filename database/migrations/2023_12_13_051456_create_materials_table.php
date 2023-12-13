<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id('ID_Material');
            $table->string('NombreMaterial', 50);
            $table->integer('CantidadMaterialRequerida');
            $table->integer('CantidadMaterialDisponible');
            $table->string('Ubicacion', 50);

            $table->integer('Responsable_ID_Responsable');
            
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
        Schema::dropIfExists('materials');
    }
}
