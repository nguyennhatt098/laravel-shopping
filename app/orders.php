<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class orders extends Model
{
    protected $table="orders";
    protected $fillable=['customer_id','name','email','phone','address','status','method_payment','status'];
    // public function total(){
    // 	$order_detail=order_detail::where('order_id',$this->id)->get();
    // 	$t=0;
    // 	foreach ($order_detail as $key => $value) {
    // 		$t=$t+($value->price*$value->quantity);
    		
    // 	}
    public function order_detail(){
        return $this->hasMany('App\order_detail');
    }
    public function user(){
        return $this->belongsTo('app\users');
    }
    
}
