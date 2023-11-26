<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->id('ID_Usuario');
            $table->string('NombreUsuario', 45);
            $table->string('Correo', 100);
            $table->string('Contrasenia', 20);
            $table->foreignId('Rol_ID_Rol');
            $table->timestamps();

            $table->primary(['ID_Usuario', 'Rol_ID_Rol']);
            $table->index('Rol_ID_Rol', 'fk_Usuario_Rol1_idx');

            $table->foreign('Rol_ID_Rol', 'fk_Usuario_Rol1')
                ->references('ID_Rol')
                ->on('Rol')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
}
