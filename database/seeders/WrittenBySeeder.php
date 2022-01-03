<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WrittenBySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i =0 ;$i<101;$i++){
            DB::table('written_bies')->insert([
                "author_id"=>$faker->numberBetween(1,10),
                "book_id"=>$faker->numberBetween(1,10)
            ]);
        }
    }
}
