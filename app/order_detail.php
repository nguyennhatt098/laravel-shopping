<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    protected $table="order_detail";
    protected $fillable=['order_id','product_id','price','quantity'];
    public function product(){
    	return $this->belongsTo('App\product');
    }
    public function orders(){
    	return $this->belongsTo('App\orders','order_id','id');
    }


}
