<?php 
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\category;
use Illuminate\Http\Request;
class categoryController extends Controller{
	
public function index(){
	$cat=category::all();
	
	return view('admin.category.index',compact('cat'));
}
public function edit($id){
	$cat=category::find($id);
	$category=category::all();
		return view('admin.category.sua',compact('cat','category'));
}
public function update($id,Request $req){
	$slug = str_slug($req->name, '-');
$this->validate($req,[
	'name'=>'required:category,name'
],[
	'name.required'=>'tên danh mục không được để trống'
	
]);
 $req->session()->flash('add', 'Sửa danh mục thành công!');
category::find($id)->update([
'name'=>$req->name,
		'status'=>$req->status,
		
		'slug'=>$slug,
]);
return redirect()->route('danh-muc');
}
public function add(){
	return view('admin.category.them');
}
public function create(Request $req){
	$slug = str_slug($req->name, '-');
$this->validate($req,[
	'name'=>'required|unique:category,name'
],[
	'name.required'=>'tên danh mục không được để trống',
	'name.unique'=>'tên danh mục đã tồn tại'
]);
 $req->session()->flash('create', 'thêm danh mục thành công!');
	category::create([
		'name'=>$req->name,
		'status'=>$req->status,
		
		'slug'=>$slug,
	]);
	return redirect()->route('danh-muc');
}
public function delete($id){
	category::destroy($id);
	
	return redirect()->route('danh-muc');
}

}
 ?>