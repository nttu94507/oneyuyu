<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('shot1');
            $table->tinyInteger('shot2');
            $table->tinyInteger('shot3');
            $table->tinyInteger('shot4');
            $table->tinyInteger('shot5');
            $table->tinyInteger('shot6');
            $table->tinyInteger('total');
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
        Schema::dropIfExists('score');
    }
}
