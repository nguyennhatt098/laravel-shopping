<?php 
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\product;
use App\category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class productController extends Controller{
public function index(){
	
	$pro=product::paginate(15);
	return view('admin.product.index',compact('pro'));
}

public function edit($id){
	$pro=product::find($id);
	$cat=category::all();
		return view('admin.product.sua',compact('pro','cat'));
}
public function update($id,Request $req){
$slug=str_slug($req->name,'-');
$pro=product::find($id);
$this->validate($req,[
'name'=> 'required:product,name',
	
	'content'=>'required:product,content',
	'price'=>'required:product,price',
	'sale_price'=>'required:product,sale_price',
	// 'status'=>$req->status,
	'description'=>'required:product,description',
	'review'=>'required:product,review'
],[
'name.required'=>'tên sản phẩm không được để trống',
		'content.required'=>'nội dung không được để trống',
		'price.required'=>'giá sản phẩm không được để trống',
		'sale_price.required'=>'giá sale không được để trống',
		'description.required'=>'mô tả sản phẩm không được để trống',
		'review.required'=>'review không được để trống'
		
		
]);
$req->session()->flash('update','sửa sản phẩm thành công');
	if($req->hasFile('image')){
		$file=$req->file('image');
		$file_name=$file->getClientOriginalName();
		$file->move(base_path('public/resouces/upload'),$file_name);
	}else{
		$file_name=$pro->image;

	}

product::find($id)->update([
'category_id'=>$req->category_id,
	'name'=>$req->name,
	'image'=>$file_name,
	'content'=>$req->content,
	'price'=>$req->price,
	'sale_price'=>$req->sale_price,
	'status'=>$req->status,
	'description'=>$req->description,
	'review'=>$req->review,
		'slug'=>$slug,
]);
return redirect()->route('san-pham1');
}
public function add(){
	$cat=category::all();
	return view('admin.product.them',compact('cat'));
}
public function create(Request $req){
	$slug = str_slug($req->name, '-');
	$this->validate($req,[
		
	'name'=> 'required|unique:product,name',
	'image'=>'required:product,image',
	'content'=>'required:product,content',
	'price'=>'required:product,price',
	'sale_price'=>'required:product,sale_price',
	// 'status'=>$req->status,
	'description'=>'required:product,description',
	'review'=>'required:product,review'
		
	],[
		'name.required'=>'tên sản phẩm không được để trống',
		'content.required'=>'nội dung không được để trống',
		'price.required'=>'giá sản phẩm không được để trống',
		'sale_price.required'=>'giá sale không được để trống',
		'description.required'=>'mô tả sản phẩm không được để trống',
		'review.required'=>'review không được để trống',
		'name.unique'=>'tên sản phẩm không được trùng nhau',
		'image.required'=>'ảnh không được để trống'
	]);

if($req->hasFile('image')){
		$file=$req->file('image');
		$file_name=$file->getClientOriginalName();
		$file->move(base_path('public/resouces/upload'),$file_name);
	}
$req->session()->flash('add','thêm sản phẩm thành công');
	product::create([
		'category_id'=>$req->category_id,
	'name'=>$req->name,
	'image'=>$file_name,
	'content'=>$req->content,
	'price'=>$req->price,
	'sale_price'=>$req->sale_price,
	'status'=>$req->status,
	'description'=>$req->description,
	'review'=>$req->review,
		'slug'=>$slug,
	]);
	return redirect()->route('san-pham1');
}
public function delete($id){
	product::destroy($id);

	return redirect()->route('san-pham1')->with('delete','xóa thành công');
}
}