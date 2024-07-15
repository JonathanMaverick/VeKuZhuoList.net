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
        Schema::create('soundtracks', function (Blueprint $table) {
            $table->id();
            $table->string('soundtrack_name');
            $table->string('audio_url');
            $table->string('soundtrack_type');
            $table->bigInteger('anime_id')->unsigned();
            $table->foreign('anime_id')->references('id')->on('animes');
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
        Schema::dropIfExists('sound_tracks');
    }
};
