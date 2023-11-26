<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsableTable extends Migration
{
    public function up()
    {
        Schema::create('Responsable', function (Blueprint $table) {
            $table->id('ID_Responsable');
            $table->string('Nombre', 50);
            $table->string('ApellidoPaterno', 50);
            $table->string('ApellidoMaterno', 50);
            $table->string('Cargo', 45);
            $table->timestamps();

            $table->primary('ID_Responsable');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Responsable');
    }
}
