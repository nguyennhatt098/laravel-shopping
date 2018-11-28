<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table="category";
    protected $fillable=[
    	'name','status','sort_order','slug'
    ];
    public function product(){
    	return $this->hasMany('app\product','id_category','id');
    }
    // public function scopesearch($query){
    // 	if(empty(request()->search)){
    // 		return $query;
    // 	}else{
    // 		return $query->where('name','like','%'.request()->search.'%');
    // 	}
    // }
}
