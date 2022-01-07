<?php

namespace Database\Seeders;

use App\Models\BookOutOnLoan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AuthorSeeder::class,
            BookSeeder::class,
            CategorySeeder::class,
            BelongsToSeeder::class,
            WrittenBySeeder::class,
            BookOutOnLoanSeeder::class
        ]);
    }
}
