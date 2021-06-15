<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMClaimsMNpiDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_claims_m_npi_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('m_claims_id');
            $table->foreign('m_claims_id')->references('id')->on('m_claims');
            $table->unsignedBigInteger('m_npi_data_id');
            $table->foreign('m_npi_data_id')->references('id')->on('m_npi_data');
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
        Schema::dropIfExists('m_claims_m_npi_data');
    }
}
