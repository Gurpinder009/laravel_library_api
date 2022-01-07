<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookOutOnLoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<101; $i++){
            DB::table('book_out_on_loans')->insert([
                "issue_date"=>$faker->date("Y-m-d"),
                "user_id" => $faker->numberBetween(1,99),
                "book_id"=>$faker->numberBetween(1,99)
            ]);
        }
    }
}
