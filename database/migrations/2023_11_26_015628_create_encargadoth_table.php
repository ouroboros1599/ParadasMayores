<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncargadothTable extends Migration
{
    public function up()
    {
        Schema::create('EncargadoTH', function (Blueprint $table) {
            $table->id('ID_EncargadoTH');
            $table->string('NombreEncargadoTH', 45);
            $table->timestamps();

            $table->primary('ID_EncargadoTH');
        });
    }

    public function down()
    {
        Schema::dropIfExists('EncargadoTH');
    }
}
