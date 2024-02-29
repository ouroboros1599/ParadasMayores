<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('materiales');

        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('nombreMaterial')->nullable();
            $table->integer('materialDisponible')->nullable();
            $table->string('ubicacion')->nullable();
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
        Schema::create('materiales', function (Blueprint $table) {
            $table->id();
            $table->string('nombreMaterial')->nullable();
            $table->integer('materialDisponible')->nullable();
            $table->string('ubicacion')->nullable();
            $table->timestamps();
        });
        Schema::dropIfExists('materials');
    }
}
