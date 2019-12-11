<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionarioQuestaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionario__questaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Biginteger('questao_id')->unsigned();
            $table->foreign('questao_id')->references('id')->on('questaos');
            $table->Biginteger('questionario_id')->unsigned();
            $table->foreign('questionario_id')->references('id')->on('questionarios');
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
        Schema::dropIfExists('questionario__questaos');
    }
}
