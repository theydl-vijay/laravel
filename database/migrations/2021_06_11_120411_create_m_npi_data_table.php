<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMNpiDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_npi_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('claims_id');
            $table->foreign('claims_id')->references('id')->on('m_claims');
            $table->bigInteger('npi');
            $table->bigInteger('fax_number');
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
        Schema::dropIfExists('m_npi_data');
    }
}
