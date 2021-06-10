<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_variant')->insert([
            'user_id'=> '1',
            'qty' => '5',
            'size'=>  '10',
            'price'=> '100'
        ]);
    }
}
