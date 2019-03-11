<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListOfCastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_of_casters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->date('startDate');
            $table->date('endDate');
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
        Schema::dropIfExists('list_of_casters');
    }
}
