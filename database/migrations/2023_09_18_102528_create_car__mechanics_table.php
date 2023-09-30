<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarMechanicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car__mechanics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mechanic_id');
            $table->unsignedBigInteger('car_id');

            $table->timestamps();
            $table->foreign('mechanic_id')->references('id')->on('mechanics');
            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car__mechanics');
    }
}
