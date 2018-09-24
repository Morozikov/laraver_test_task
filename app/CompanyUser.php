<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyUser extends Model
{
    //
    protected $table = 'company_users';
    protected $fillable = ['company_id', 'user_id'];
    public $timestamps = false;


    public static function delConnect($name_colums="",$id = 0 ){
        if ($id>0 and !empty($name_colums)){
            $company_users = CompanyUser::where($name_colums,$id)->get();
            if (isset($company_users))
            foreach ($company_users as $company_user){
                $company_user->delete();
            }
        }
    }
}
