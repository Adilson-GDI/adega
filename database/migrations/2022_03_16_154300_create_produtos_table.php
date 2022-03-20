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
            $table->timestamps();
             /**
             * foreign keys
             */
    
           
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
