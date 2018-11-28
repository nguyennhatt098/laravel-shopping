<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\users;
use App\orders;
class userController extends Controller
{
    public function index(){
    	$user=users::paginate();
    	
    	return view('admin.user.index',compact('user'));
    }
    public function edit($id){
    	$user=users::find($id);

    	return view('admin.user.sua',compact('user'));
    }
    public function edit_post($id,Request $req){
    	if(isset($req->password)){
    		$pas=bcrypt($req->password);
    	}else{
    		$pas=$user->password;
    	}
    	users::find($id)->update([
    		'username'=>$req->username,
    		'password'=>$pas,
    		'email'=>$req->email,
    		'phone_number'=>$req->phone_number,
    		'address'=>$req->address,
    		'birthday'=>$req->birthday,
    		'gender'=>$req->gender
    	]);
    	return redirect()->route('tai-khoan');
    }
    
}
