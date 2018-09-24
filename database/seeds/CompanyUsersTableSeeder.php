<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Company;
use App\CompanyUser;

class CompanyUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arr_ci = array(); // array company id
        $arr_ui = array(); // array user id
        $companies = Company::all();
        $users = User::all();
        foreach ($companies as $company){
            $arr_ci[] = $company->id;
        }
        foreach ($users as $user){
            $arr_ui[] = $user->id;
        }

        // Create 50 company_users records
        for ($i = 0; $i < 50; $i++) {
            $rand_ui_key = array_rand($arr_ui);
            $rand_ci_key = array_rand($arr_ci);
             CompanyUser::create([
                'company_id' => $arr_ci[$rand_ci_key],
                'user_id' => $arr_ui[$rand_ui_key]
            ]);
        }
    }
}
