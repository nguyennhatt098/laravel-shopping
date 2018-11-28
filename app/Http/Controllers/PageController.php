<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\banner;
use App\blog;
use App\category;
use App\users;
use App\orders;
use App\order_detail;
use Illuminate\Support\Facades\DB;
use Cart;
use Auth;
use Mail;
use App\Mail\OrderShipped;
class PageController extends Controller
{
    public function index(){
    	$pro=product::paginate(8);
    	$ban=banner::all();
    	$blog=blog::all();
	    $men=DB::table('product')->where('category_id',2)->paginate(8);	
	    $child=DB::table('product')->where('category_id',6)->paginate(8);	
	    $watch=DB::table('product')->where('category_id',5)->paginate(8);
		return view('index',compact('pro','ban','blog','men','child','watch'));
	}
	public function sanpham($id,Request $req){
		$cat=category::all();
		$pro=DB::table('product')->where('category_id',$id)->paginate(9);
		
		$category=category::find($id);
		return view('san-pham',compact('cat','pro','category'));
	}
	public function cart(){
		
		$cart=Cart::content();
		
		return	view('giohang',compact('cart'));
	}

	public function add(Request $req){
		if(isset($req)){
			$product_id=$req->product_id;
			$product=product::find($product_id);
			
			$cartAdd=[
				'id'=>$product_id,
				'options' =>['image' => $product->image],
				'name'=>$product->name,
				'price'=>$product->price=($product->price>$product->sale_price) ? $product->sale_price : $product->price,
				'qty'=>1
			];
			Cart::add($cartAdd);
		}
		
		$cart=Cart::content();
		
		return redirect()->route('gio-hang');
	}
	public function delete($id){

		Cart::remove($id);
		return redirect('gio-hang');
	}
	public function catnhat(Request $req){
		echo $req->qty;
			$id=$req->id;
			$qty=$req->qty;
			
			Cart::update($id,$qty);
			echo "oke";
	}
	public function login(){
		return view('login');
	}
	public function post_login(Request $req){
		
		if(Auth::attempt($req->only('email','password'))){
			// dd(Auth::user()->name);
			return redirect()->route('trang-chu');
		}else{
			echo "sai tài khoản";
		}
	}
	public function register(){
		return view('dang-ky');
	}
	public function post_register(Request $req){
		
		$this->validate($req,[
'username'=> 'required:users,username',
	
	'password'=>'required:users,password',
	"re_password"=>'same:password',
	'email'=>'required|email|unique:users,email',
	'phone_number'=>'required:users,phone_number',
	'address'=>'required:users,address',
	'birthday'=>'required:users,birthday',
	
],[
'username.required'=>'tên  không được để trống',
		'password.required'=>'password không được để trống',
		're_password.same'=>'password phải giống nhau',
		'email.required'=>'email không được để trống',
		'email.email'=>'không đúng định dạng email ',
		'email.unique'=>'email đã tồn tại',
		'phone_number.required'=>'số điện thoại không được để trống',
		'address.required'=>'địa chỉ không được để trống',
		'birthday.required'=>'ngày sinh không được để trống'
		
]);
		$password=bcrypt($req->password);

		users::create([
			'username'=>$req->username,
			'password'=>$password,
			'email'=>$req->email,
			'phone_number'=>$req->phone_number,
			'address'=>$req->address,
			'birthday'=>$req->birthday,
			'gender'=>$req->gender,

		]);
		return redirect()->route('dang-ky');
	}
	public function logout(){
		Auth::logout();
		return redirect()->route('trang-chu');
	}
	public function order(){
		$cat=category::all();
		$cart=Cart::content();
		$tt=Cart::subtotal();
		
		return view('order',compact('cat','cart','tt'));
	}
	public function post_order(Request $req){

		$this->validate($req,[
			'name'=> 'required:orders,name',
	
	
	'email'=>'required|email:orders,email',
	'phone'=>'required:orders,phone',
	'address'=>'required:orders,address',
	
		],[
			'name.required'=>'tên  không được để trống',
		
		'email.required'=>'email không được để trống',
		'email.email'=>'không đúng định dạng email ',
		
		'phone.required'=>'số điện thoại không được để trống',
		'address.required'=>'địa chỉ không được để trống',
		
		]);

		$req->merge(['customer_id'=>Auth::id()]);
		$datas=[];
		$cart=Cart::content();
		
		if($order=orders::create($req->all())){
			foreach ($cart as  $value) {
			$datas=[
				'order_id'=>$order->id,
				'product_id'=>$value->id,
				'price'=>$value->price,
				'quantity'=>$value->qty
			];
			
			}
		}
		
		if($datas){
			if(order_detail::insert($datas)){
				
				Mail::to(Auth::user()->email)->send(new OrderShipped($order));
				$req->session()->flash('success','đặt hàng thành công');
				Cart::destroy();
				return redirect()->route('trang-chu');
			}else{
				$order->delete();
				echo 'lỗi';
			}
		}
		
	}
	public function detail( $id){
		
		$detail=product::find($id);
		$pro=product::paginate(12);

		return view('product_detail',compact('detail','pro'));
	}
	public function blog(){
		return view('blog');
	}
	public function contact(){
		return view('contact');
	}
	public function about(){
		return view('about');
	}
	public function Search(Request $req){
		if(empty($req->search)){
    		return redirect()->back();
    	}else{
    		$pro=product::where('name','like','%'.$req->search.'%')->get();
    	}
		
		$cat=category::all();
		$s=$req->search;
		return view('search',compact('pro','cat','s'));
	}
	

}
