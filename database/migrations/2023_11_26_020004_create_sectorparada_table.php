<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorparadaTable extends Migration
{
    public function up()
    {
        Schema::create('SectorParada', function (Blueprint $table) {
            $table->id('ID_Area');
            $table->string('NombreSector', 45);
            $table->timestamps();

            $table->primary('ID_Area');
        });
    }

    public function down()
    {
        Schema::dropIfExists('SectorParada');
    }
}
