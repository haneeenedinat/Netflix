<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GenreMovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('genre_movie', function (Blueprint $table) {
         $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("category_id2");
            $table->foreign("category_id")->references("id")->on("categorries")->onDelete("CASCADE");
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
        //
    }
}
