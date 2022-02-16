<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorryMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorry_movie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("categorry_id");
            $table->foreign("categorry_id")->references("id")->on("categorries")->onDelete("CASCADE");
            $table->unsignedBigInteger("movie_id");
            $table->foreign("movie_id")->references("id")->on("movies")->onDelete("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorry_movie');
    }
}
