<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        $faker = \Faker\Factory::create();

        DB::table('user_seed')->insert([
            "name" => "test",
            "roles" => $faker->randomElement(["client", "admin"]),
            "email" => "demo@gmail.com"
        ]);

        
    }
}
