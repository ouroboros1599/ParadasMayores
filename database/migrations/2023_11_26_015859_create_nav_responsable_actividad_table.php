<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavResponsableActividadTable extends Migration
{
    public function up()
    {
        Schema::create('Nav_Responsable_Actividad', function (Blueprint $table) {
            $table->foreignId('Responsable_ID_Responsable');
            $table->foreignId('Actividad_ID_Actividad');
            $table->foreignId('Actividad_Ejecucion_ID_Ejecucion');
            $table->foreignId('Actividad_Planificacion_ID_planificacion');
            $table->foreignId('Actividad_Planificacion_Empresa_ID_Empresa');
            $table->foreignId('Actividad_SectorParada_ID_Area');
            $table->timestamps();

            $table->primary(
                [
                    'Responsable_ID_Responsable',
                    'Actividad_ID_Actividad',
                    'Actividad_Ejecucion_ID_Ejecucion',
                    'Actividad_Planificacion_ID_planificacion',
                    'Actividad_Planificacion_Empresa_ID_Empresa',
                    'Actividad_SectorParada_ID_Area'
                ],
                'Nav_Responsable_Actividad_primary'
            );

            $table->index(
                [
                    'Actividad_ID_Actividad',
                    'Actividad_Ejecucion_ID_Ejecucion',
                    'Actividad_Planificacion_ID_planificacion',
                    'Actividad_Planificacion_Empresa_ID_Empresa',
                    'Actividad_SectorParada_ID_Area'
                ],
                'fk_Responsable_has_Actividad_Actividad1_idx'
            );

            $table->index('Responsable_ID_Responsable', 'fk_Responsable_has_Actividad_Responsable1_idx');

            $table->foreign('Responsable_ID_Responsable', 'fk_Responsable_has_Actividad_Responsable1')
                ->references('ID_Responsable')
                ->on('Responsable')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->foreign(
                [
                    'Actividad_ID_Actividad',
                    'Actividad_Ejecucion_ID_Ejecucion',
                    'Actividad_Planificacion_ID_planificacion',
                    'Actividad_Planificacion_Empresa_ID_Empresa',
                    'Actividad_SectorParada_ID_Area'
                ],
                'fk_Responsable_has_Actividad_Actividad1'
            )
                ->references(
                    [
                        'ID_Actividad',
                        'Ejecucion_ID_Ejecucion',
                        'Planificacion_ID_planificacion',
                        'Planificacion_Empresa_ID_Empresa',
                        'SectorParada_ID_Area'
                    ]
                )
                ->on('Actividad')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Nav_Responsable_Actividad');
    }
}
