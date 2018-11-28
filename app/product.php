<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table="product";
    protected $fillable=[
    	'category_id','name','image','content','price','sale_price','status','description','review','slug'
    ];
     public function category(){
    	return $this->belongsTo('App\category');
    }
    public function order_detail(){
    	return $this->hasMany('app\order_detail','product_id','id');
    }
}
