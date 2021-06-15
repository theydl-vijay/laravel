<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTaxonomyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_taxonomy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('claims_id');
            $table->foreign('claims_id')->references('id')->on('m_claims');
            $table->bigInteger('npi');
            $table->bigInteger('taxonomy_code');
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
        Schema::dropIfExists('m_taxonomy');
    }
}
