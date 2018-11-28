@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">sửa danh mục</h3>
          
          
        </div>
        <div class="box-body">
          <form action="" method="POST" role="form">
          	<legend>Form title</legend>
          <input type="hidden" name="_token" value="{{csrf_token()}}">

          	<div class="form-group">
          		<label for="">username</label>
              
          		<input type="text" class="form-control" name="username" value="{{$user->username}}" placeholder="Input field">
              <label for="">password</label>
             <input type="password" class="form-control" name="password" value="{{$user->password}}" placeholder="Input field">
          		<label for="">email</label>
             <input type="text" class="form-control" name="email" value="{{$user->email}}" placeholder="Input field">
             <label for="">phone</label>
             <input type="text" class="form-control" name="phone_number" value="{{$user->phone_number}}" placeholder="Input field">
             <label for="">address</label>
             <input type="text" class="form-control" name="address" value="{{$user->address}}" placeholder="Input field">
             <label for="">birthday</label>
             <input type="text" class="form-control" name="birthday" value="{{$user->birthday}}" placeholder="Input field">
             <label for="">gender</label>
             <select name="gender" id="input" class="form-control" required="required">
              {{$selected=($user->gender=='male') ? 'selected' : ''}}
               <option {{$selected}} value="male">male</option>
               <option {{$selected}} value="female">female</option>
             </select>
          			
          	</div>
          
          	
          
          	<button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@stop