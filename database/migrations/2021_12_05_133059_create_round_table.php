<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('round', function (Blueprint $table) {
            $table->id();
            $table->string('gameid');
            $table->string('playerid');
            $table->string('round1id');
            $table->string('round2id');
            $table->string('round3id');
            $table->string('round4id');
            $table->string('round5id');
            $table->string('round6id');
            $table->Integer('gmatotal');
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
        Schema::dropIfExists('round');
    }
}
