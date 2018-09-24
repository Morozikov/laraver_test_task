<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'companies';
    protected $fillable = ['company_name'];
    public $timestamps = false;

    public function users(){
        return $this->belongsToMany('App\User', 'company_users');
    }

}
