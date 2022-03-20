<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelacionamentoTableProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->foreign('id_tipo_embalagens')->references('id')->on('tipo_embalagens');
            $table->foreign('id_tipo_envazamentos')->references('id')->on('tipo_envazamentos');
            $table->foreign('id_litragens')->references('id')->on('litragens');
            $table->foreign('id_marcas')->references('id')->on('marcas');
            $table->foreign('id_estados')->references('id')->on('estados');
            $table->foreign('id_imagens')->references('id')->on('imagens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            //
        });
    }
}
