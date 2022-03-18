<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100)->nullable()->default(null);
            $table->decimal('valor', 10,2)->nullable()->default(0.00);
            $table->unsignedInteger('id_tipo_embalagens')->index();
            $table->unsignedInteger('id_tipo_envazamentos')->index();
            $table->unsignedInteger('id_litragens')->index();
            $table->unsignedInteger('id_marcas')->index();
            $table->unsignedInteger('id_estados')->index();
            $table->unsignedInteger('id_imagens')->index();

             /**
             * foreign keys
             */
            $table->foreign('id_tipo_embalagens')->references('id')->on('tipo_embalagens');
            $table->foreign('id_tipo_envazamentos')->references('id')->on('tipo_envazamentos');
            $table->foreign('id_litragens')->references('id')->on('litragens');
            $table->foreign('id_marcas')->references('id')->on('marcas');
            $table->foreign('id_estados')->references('id')->on('estados');
            //$table->foreign('id_imagens')->references('id')->on('imagens');
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
        Schema::dropIfExists('produtos');
    }
}
