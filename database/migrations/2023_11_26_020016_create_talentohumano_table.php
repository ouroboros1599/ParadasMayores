<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentohumanoTable extends Migration
{
    public function up()
    {
        Schema::create('TalentoHumano', function (Blueprint $table) {
            $table->id('ID_TalentoHumano');
            $table->string('NombreCargo', 45);
            $table->integer('Cantidad');
            $table->foreignId('EncargadoTH_ID_EncargadoTH');
            $table->timestamps();

            $table->primary(['ID_TalentoHumano', 'EncargadoTH_ID_EncargadoTH']);
            $table->index('EncargadoTH_ID_EncargadoTH', 'fk_TalentoHumano_EncargadoTH1_idx');

            $table->foreign('EncargadoTH_ID_EncargadoTH', 'fk_TalentoHumano_EncargadoTH1')
                ->references('ID_EncargadoTH')
                ->on('EncargadoTH')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
        });
    }

    public function down()
    {
        Schema::dropIfExists('TalentoHumano');
    }
}
