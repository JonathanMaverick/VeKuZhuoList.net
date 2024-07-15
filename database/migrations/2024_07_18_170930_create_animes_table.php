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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('anime_name');
            $table->date('release_date');
            $table->integer('views');
            $table->double('mal_score');
            $table->text('synopsis');
            $table->string('trailer_url');
            $table->string('image_url');
            $table->bigInteger('studio_id')->unsigned();
            $table->bigInteger('season_id')->unsigned();
            $table->foreign('studio_id')->references('id')->on('studios');
            $table->foreign('season_id')->references('id')->on('seasons');
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
        Schema::dropIfExists('animes');
    }
};
