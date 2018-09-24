<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';
    protected $fillable = ['user_name'];
    public $timestamps = false;

    public function companies(){
        return $this->belongsToMany('App\Company', 'company_users');
    }
}
