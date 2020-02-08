<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_films', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rental_id');
            $table->foreign('rental_id')->references('id')->on('rentals');
            $table->integer('film_id');
            $table->foreign('film_id')->references('id')->on('films');
            $table->decimal('price', 6,2);
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
        Schema::dropIfExists('rental_films');
    }
}
