<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimsEncountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims_encounters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('claims_id');
            $table->foreign('claims_id')->references('id')->on('claims');
            $table->unsignedBigInteger('encounters_id');
            $table->foreign('encounters_id')->references('id')->on('encounters');
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
        Schema::dropIfExists('claims_encounters');
    }
}
