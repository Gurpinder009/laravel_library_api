<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i =0;$i<101;$i++){
            $book = new Book();
            $book->book_title = $faker->name;
            $book->book_date_of_publication = $faker->date(); 
            $book->save();
        }
    }
}
