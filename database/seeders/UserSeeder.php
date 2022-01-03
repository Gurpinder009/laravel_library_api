<?php

namespace Database\Seeders;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
            $user = new User();
            $user->user_name = $faker->name;
            $user->user_email = $faker->email();
            $user->user_phone_num = $faker->phoneNumber();
            $user->user_address = $faker->address();
            $user->user_password = $faker->password(6);
            $user->save();
            unset($user);
        }
    }
}
