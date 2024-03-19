<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnRoleUsuarioIdToUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->integer('parada_mayor_activa')->nullable();
            $table->integer('rol_usuario_id')->nullable();
            $table->dropColumn('rol_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropColumn('rol_usuario_id');
            $table->dropColumn('parada_mayor_activa');
            $table->integer('rol_id')->nullable();
        });
    }
}
