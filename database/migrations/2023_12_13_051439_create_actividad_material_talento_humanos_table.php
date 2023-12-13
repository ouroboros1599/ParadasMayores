<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadMaterialTalentoHumanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_material_talento_humanos', function (Blueprint $table) {
            $table->id('ID_Nav_ActividadMaterial');

            $table->integer('Actividad_ID_Actividad');
            $table->integer('Material_ID_Material');
            $table->integer('TalentoHumano_ID_TalentoHumano');

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
        Schema::dropIfExists('actividad_material_talento_humanos');
    }
}
