<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BelongsToSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i =0;$i<100;$i++){
            DB::table('belongs_tos')->insert([
                "book_id"=>$faker->numberBetween(1,100),
                "category_id"=>$faker->numberBetween(1,100)
            ]);
        }
    }
}
