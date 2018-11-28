@extends('page')
@section('content')
<div class="container">
<div class="panel panel-primary">
	<div class="panel-body">
		<form action="{{route('dang-ky')}}" method="POST" >
			@csrf
	<legend>Đăng ký</legend>

	<div class="form-group"> 	
		<div class="col-md-6">
			<label for="">name</label>
		<input type="text" class="form-control" name="username" placeholder="Input field">
		@if($errors->has('username'))
		<div style="color: red" class="alert">
			{{$errors->first('username')}}
		</div>
		@endif
		<label for="">password</label>
		<input type="password" class="form-control" name="password" placeholder="Input field">
			@if($errors->has('password'))
		<div style="color: red" class="alert">
			{{$errors->first('password')}}
		</div>
		@endif
		<label for="">confirm password</label>
		<input type="password" class="form-control" name="re_password" placeholder="Input field">
			@if($errors->has('re_password'))
		<div style="color: red" class="alert">
			{{$errors->first('re_password')}}
		</div>
		@endif
		<label for="">email</label>
		<input type="text" class="form-control" name="email" placeholder="Input field">
			@if($errors->has('email'))
		<div style="color: red" class="alert">
			{{$errors->first('email')}}
		</div>
		@endif
		</div>
		<div class="col-md-6">
			<label for="">phone</label>
		<input type="text" class="form-control" name="phone_number" placeholder="Input field">
			@if($errors->has('phone_number'))
		<div style="color: red" class="alert">
			{{$errors->first('phone_number')}}
		</div>
		@endif
		<label for="">address</label>
		<input type="text" class="form-control" name="address" placeholder="Input field">
			@if($errors->has('address'))
		<div style="color: red" class="alert">
			{{$errors->first('address')}}
		</div>
		@endif
		<label for="">birthday</label>
		<input type="date" class="form-control" name="birthday" placeholder="Input field">
			@if($errors->has('birthday'))
		<div style="color: red" class="alert">
			{{$errors->first('birthday')}}
		</div>
		@endif
		<label for="">gender</label>
		<div class="radio">
			<label >
				<input  type="radio" name="gender" id="input" value="male" checked="checked">
				male
				</label>
				<label>
				<input type="radio" name="gender" id="input" value="female" checked="checked">
				female
			</label>
		</div>
			@if($errors->has('gender'))
		<div style="color: red" class="alert">
			{{$errors->first('gender')}}
		</div>
		@endif
		
		</div>
		
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
	</div>
</div>
</div>

@stop