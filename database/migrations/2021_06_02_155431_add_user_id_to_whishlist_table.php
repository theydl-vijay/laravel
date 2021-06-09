<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToWhishlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('whishlist', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->integer('votes')->after('product_name');
        });
        Schema::rename('whishlist', 'wishlist_product');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('whishlist', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('votes');
        });
    }
}
