<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavMaterialActividadTable extends Migration
{
    public function up()
    {
        Schema::create('Nav_Material_Actividad', function (Blueprint $table) {
            $table->foreignId('Material_ID_Material');
            $table->foreignId('Actividad_ID_Actividad');
            $table->foreignId('Actividad_Ejecucion_ID_Ejecucion');
            $table->foreignId('Actividad_Planificacion_ID_planificacion');
            $table->foreignId('Actividad_Planificacion_Empresa_ID_Empresa');
            $table->foreignId('Actividad_SectorParada_ID_Area');
            $table->foreignId('TalentoHumano_ID_TalentoHumano');
            $table->timestamps();

            $table->primary(
                [
                    'Material_ID_Material',
                    'Actividad_ID_Actividad',
                    'Actividad_Ejecucion_ID_Ejecucion',
                    'Actividad_Planificacion_ID_planificacion',
                    'Actividad_Planificacion_Empresa_ID_Empresa',
                    'Actividad_SectorParada_ID_Area',
                    'TalentoHumano_ID_TalentoHumano'
                ],
                'Nav_Material_Actividad_primary'
            );

            $table->index(
                [
                    'Actividad_ID_Actividad',
                    'Actividad_Ejecucion_ID_Ejecucion',
                    'Actividad_Planificacion_ID_planificacion',
                    'Actividad_Planificacion_Empresa_ID_Empresa',
                    'Actividad_SectorParada_ID_Area'
                ],
                'fk_Material_has_Actividad_Actividad1_idx'
            );

            $table->index('Material_ID_Material', 'fk_Material_has_Actividad_Material1_idx');
            $table->index('TalentoHumano_ID_TalentoHumano', 'fk_Material_has_Actividad_TalentoHumano1_idx');

            $table->foreign('Material_ID_Material', 'fk_Material_has_Actividad_Material1')
                ->references('ID_Material')
                ->on('Material')
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
                'fk_Material_has_Actividad_Actividad1'
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

            $table->foreign('TalentoHumano_ID_TalentoHumano', 'fk_Material_has_Actividad_TalentoHumano1')
                ->references('ID_TalentoHumano')
                ->on('TalentoHumano')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Nav_Material_Actividad');
    }
}
