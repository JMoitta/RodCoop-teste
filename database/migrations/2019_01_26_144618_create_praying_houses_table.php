<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrayingHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praying_houses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sector');
            $table->string('daysOfTheWeekOfWorship');
            $table->string('dayOfTheCasterOfTheWeek');
            $table->integer('cooperator_id')->unsigned();
            $table->foreign('cooperator_id')->references('id')->on('cooperators');
            $table->integer('administrative_region_id')->unsigned();
            $table->foreign('administrative_region_id')->references('id')->on('administrative_regions');
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
        Schema::dropIfExists('praying_houses');
    }
}
