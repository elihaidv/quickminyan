<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->point('location');
            $table->string('city')->nullable();
            $table->integer('prayers')->default(0);
            $table->boolean('repeatly')->deafult(0);
            $table->time('hour')->nullable();
            $table->integer('user_id')->references('id')->on('users')->nullable();
            $table->timestamps();

            $table->spatialIndex('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
