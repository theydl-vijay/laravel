<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'product_image' => 'test',
            'product_name' => 'abc',
            'product_description'=> 'hello this is anc product'
        ]);
    }
}
