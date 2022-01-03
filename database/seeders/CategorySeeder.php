<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<101;$i++){
           DB::table('categories')->insert([
               "category_name"=>$faker->text(40),
           ]);
        }  
        
    }
}
