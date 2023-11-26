<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegueroTable extends Migration
{
    public function up()
    {
        Schema::create('Bodeguero', function (Blueprint $table) {
            $table->id('ID_Bodeguero');
            $table->string('NombreBodeguero', 45);
            $table->timestamps();

            $table->primary('ID_Bodeguero');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Bodeguero');
    }
}