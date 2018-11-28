@extends('page')
	@section('content')
	

	<div style="width: 600px;padding-bottom: 20px;" class="container">
		<div class="panel panel-primary">
		<div class="panel-body">
			<form action="" method="POST" role="form">
				@csrf
		<legend>Welcome fashe shop</legend>
	
		<div class="form-group">
			<label for="">user name</label>
			<input type="text" class="form-control" name="email" placeholder="Input field">
			<label for="">password</label>
			<input type="password" class="form-control" name="password" placeholder="********">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
		</div>
	</div>
	
</div>
	@stop