<?php 
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\category;
use App\orders;
use App\order_detail;
use App\product;
use Cart;
use DB;
use Illuminate\Http\Request;
class orderController extends Controller{
	public function index(){
		$order=orders::all();
		return view('admin.order.index',compact('order'));
	}
	public function order_detail($id){
		$order_detail=order_detail::where('order_id',$id)->first();
		
		$order=orders::find($id);
		
		$pro=order_detail::where('order_id',$id)->get();
		
		return view('admin.order.chitietdathang',compact('order_detail','order','pro'));
	}
	public function stt($id,$checked ){
		
		if($checked==0){
			DB::table('orders')->where('id',$id)->update(['status'=>4]);	
		}else if($checked==1){
			DB::table('orders')->where('id',$id)->update(['status'=>2]);
		}else if($checked==2){
			DB::table('orders')->where('id',$id)->update(['status'=>3]);
		}else{
			DB::table('orders')->where('id',$id)->update(['status'=>1]);
		}
		
		return redirect()->back();
	}
}