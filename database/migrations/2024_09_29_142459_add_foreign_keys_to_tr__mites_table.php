<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trámites', function (Blueprint $table) {
            $table->foreign(['ID_Visita'], 'trámites_ibfk_1')->references(['ID_Visita'])->on('visitas');
            $table->foreign(['ID_Usuario'], 'trámites_ibfk_2')->references(['ID_Usuario'])->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trámites', function (Blueprint $table) {
            $table->dropForeign('trámites_ibfk_1');
            $table->dropForeign('trámites_ibfk_2');
        });
    }
};
