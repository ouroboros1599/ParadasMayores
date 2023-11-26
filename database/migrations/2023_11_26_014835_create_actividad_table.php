<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadTable extends Migration
{
    public function up()
    {
        Schema::create('Actividad', function (Blueprint $table) {
            $table->id('ID_Actividad');
            $table->string('NombreActividad', 100);
            $table->string('OrdenTrabajo', 45);
            $table->tinyInteger('Critica');
            $table->string('Estado', 45);
            $table->dateTime('InicioReal')->nullable();
            $table->dateTime('FinReal')->nullable();
            $table->foreignId('Ejecucion_ID_Ejecucion');
            $table->foreignId('Planificacion_ID_planificacion');
            $table->foreignId('Planificacion_Empresa_ID_Empresa');
            $table->foreignId('SectorParada_ID_Area');
            $table->timestamps();

            $table->primary(['ID_Actividad', 'Ejecucion_ID_Ejecucion', 'Planificacion_ID_planificacion', 'Planificacion_Empresa_ID_Empresa', 'SectorParada_ID_Area']);
            $table->index(['Planificacion_ID_planificacion', 'Planificacion_Empresa_ID_Empresa'], 'fk_Actividad_Planificacion1_idx');
            $table->index('SectorParada_ID_Area', 'fk_Actividad_SectorParada1_idx');

            $table->foreign(['Planificacion_ID_planificacion', 'Planificacion_Empresa_ID_Empresa'], 'fk_Actividad_Planificacion1')
                ->references(['ID_planificacion', 'Empresa_ID_Empresa'])
                ->on('Planificacion')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->foreign('SectorParada_ID_Area', 'fk_Actividad_SectorParada1')
                ->references('ID_Area')
                ->on('SectorParada')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Actividad');
    }
}