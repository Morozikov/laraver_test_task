<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesTableSeeder extends Seeder
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

        // Create 50 company records
        for ($i = 0; $i < 50; $i++) {
            Company::create([
                'company_name' => $faker->company
            ]);
        }
    }
}
