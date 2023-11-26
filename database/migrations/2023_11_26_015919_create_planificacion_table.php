<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanificacionTable extends Migration
{
    public function up()
    {
        Schema::create('Planificacion', function (Blueprint $table) {
            $table->id('ID_planificacion');
            $table->dateTime('FechaInicio');
            $table->dateTime('FechaTermino');
            $table->foreignId('Empresa_ID_Empresa');
            $table->timestamps();

            $table->primary(['ID_planificacion', 'Empresa_ID_Empresa']);
            $table->index('Empresa_ID_Empresa', 'fk_Planificacion_Empresa1_idx');

            $table->foreign('Empresa_ID_Empresa', 'fk_Planificacion_Empresa1')
                ->references('ID_Empresa')
                ->on('Empresa')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Planificacion');
    }
}
