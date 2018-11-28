<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table="users";
    protected $fillable=[
    	'username','password','email','phone_number','address','birthday','gender'
    ];
    public function order(){
    	return $this->hasMany('app\category');
    }
}
