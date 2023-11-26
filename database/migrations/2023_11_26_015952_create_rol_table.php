<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolTable extends Migration
{
    public function up()
    {
        Schema::create('Rol', function (Blueprint $table) {
            $table->id('ID_Rol');
            $table->string('NombreRol', 45);
            $table->timestamps();

            $table->primary('ID_Rol');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Rol');
    }
}
