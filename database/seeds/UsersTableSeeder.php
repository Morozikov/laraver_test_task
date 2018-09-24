<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        // Create 50 users records
        for ($i = 0; $i < 50; $i++) {
            User::create([
                'user_name' => $faker->name
            ]);
        }
    }
}
