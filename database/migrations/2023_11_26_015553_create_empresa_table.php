<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    public function up()
    {
        Schema::create('Empresa', function (Blueprint $table) {
            $table->id('ID_Empresa');
            $table->string('Nombre', 50);
            $table->string('NombreParada', 50);
            $table->string('Empresacol', 45);
            $table->timestamps();

            $table->primary('ID_Empresa');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Empresa');
    }
}