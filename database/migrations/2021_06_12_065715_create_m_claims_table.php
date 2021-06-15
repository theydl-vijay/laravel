<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_claims', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mh_id');
            $table->foreign('mh_id')->references('id')->on('m_hospital');
            $table->bigInteger('npi');
            $table->string('patient_full_name','50');
            $table->string('provider_full_name','50');
            $table->bigInteger('mrn');
            $table->enum('status',['pending', 'complete']);
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
        Schema::dropIfExists('m_claims');
    }
}
