<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialTable extends Migration
{
    public function up()
    {
        Schema::create('Material', function (Blueprint $table) {
            $table->id('ID_Material');
            $table->string('Nombre', 100);
            $table->integer('CantidadRequerida');
            $table->integer('CantidadDisponible');
            $table->string('Ubicacion', 100);
            $table->foreignId('Bodeguero_ID_Bodeguero');
            $table->timestamps();

            $table->primary(['ID_Material', 'Bodeguero_ID_Bodeguero']);
            $table->index('Bodeguero_ID_Bodeguero', 'fk_Material_Bodeguero1_idx');

            $table->foreign('Bodeguero_ID_Bodeguero', 'fk_Material_Bodeguero1')
                ->references('ID_Bodeguero')
                ->on('Bodeguero')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Material');
    }
}
