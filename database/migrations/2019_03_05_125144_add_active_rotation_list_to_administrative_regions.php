<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActiveRotationListToAdministrativeRegions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('administrative_regions', function (Blueprint $table) {
            $table->integer('active_list_id')->unsigned()->nullable();
            $table->foreign('active_list_id')->references('id')->on('list_of_casters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('administrative_regions', function (Blueprint $table) {
            $table->dropForeign('active_list_id');
        });
    }
}
