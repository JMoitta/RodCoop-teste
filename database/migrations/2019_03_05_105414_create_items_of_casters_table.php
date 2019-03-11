<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsOfCastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_of_casters', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dateOfWorship');
            $table->string('dayOfTheWeek');
            $table->time('worshipTime');
            $table->integer('caster_cooperator_id')->unsigned();
            $table->foreign('caster_cooperator_id')->references('id')->on('cooperators');
            $table->integer('caster_prayer_house_id')->unsigned();
            $table->foreign('caster_prayer_house_id')->references('id')->on('praying_houses');
            $table->integer('item_rotation_list_id')->unsigned();
            $table->foreign('item_rotation_list_id')->references('id')->on('list_of_casters');
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
        Schema::dropIfExists('items_of_casters');
    }
}
