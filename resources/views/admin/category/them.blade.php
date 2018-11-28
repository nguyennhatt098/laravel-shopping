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
          <h3 class="box-title">thêm mới danh mục</h3>

          
        </div>
        <div class="box-body">
          <form action="" method="POST" role="form">
          	<legend>Form title</legend>
          <input type="hidden" name="_token" value="{{csrf_token()}}">

          	<div class="form-group">
          		<label for="">name</label>
          		<input type="text" class="form-control" name="name" placeholder="Input field">
              @if($errors->has('name'))
              <div style="color: red" class="help-block">
                {{$errors->first('name')}}
              </div>
              @endif
          		<label for="">status</label>
              <select name="status" id="input" class="form-control" required="required">
                <option value="0">ẩn</option>
                <option value="1">hiện</option>
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