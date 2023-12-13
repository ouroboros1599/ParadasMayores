<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanificacionEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planificacion_empresas', function (Blueprint $table) {
            $table->id('ID_Nav_PlanificacionEmpresa');

            $table->integer('Planificacion_ID_Planificacion');
            $table->integer('Empresa_ID_Empresa');

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
        Schema::dropIfExists('planificacion_empresas');
    }
}
