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
          <h3 class="box-title">Thêm mới sản phẩm</h3>

          
        </div>
        <div class="box-body">
          <form action="" method="POST" role="form" enctype="multipart/form-data">
          	<legend>Form title</legend>
          <input type="hidden" name="_token" value="{{csrf_token()}}">

          	<div class="form-group">
          		<label for="">name</label>
              
          		<input type="text" class="form-control" name="name"  placeholder="Input field">
              @if($errors->has('name'))
              <div style="color: red" class="help-block">
                  {{$errors->first('name')}}
              </div>
              @endif
              <label for="">danh mục</label>
              <select name="category_id" id="input" class="form-control" required="required">
                @foreach($cat as $value)
                <option value="{{$value->id}}" >{{$value->name}}</option>
                @endforeach
              </select>
             
              <label for="">ảnh</label>
              
              <input type="file" class="form-control" name="image" value="" placeholder="Input field">
              @if($errors->has('image'))
              <div style="color: red" class="help-block">
                  {{$errors->first('image')}}
              </div>
              @endif
              <label for="">content</label>
              
              <input type="text" class="form-control" name="content"  placeholder="Input field">
              @if($errors->has('content'))
              <div style="color: red" class="help-block">
                  {{$errors->first('content')}}
              </div>
              @endif
              <label for="">giá gốc</label>
              
              <input type="text" class="form-control" name="price"  placeholder="Input field">
              @if($errors->has('price'))
              <div style="color: red" class="help-block">
                  {{$errors->first('price')}}
              </div>
              @endif
               <label for="">giá sale</label>
              
              <input type="text" class="form-control" name="sale_price" placeholder="Input field">
              @if($errors->has('sale_price'))
              <div style="color: red" class="help-block">
                  {{$errors->first('sale_price')}}
              </div>
              @endif
               <label for="">mô tả</label>
              
              <input type="text" class="form-control" name="description"  placeholder="Input field">
               @if($errors->has('description'))
              <div style="color: red" class="help-block">
                  {{$errors->first('description')}}
              </div>
              @endif
          		<label for="">status</label>

              <select name="status" id="inputStatus" class="form-control" required="required">
                <option value="1">hiện</option>
                <option value="0">ẩn</option>
              </select>
          	
          		  <label for="">review</label>
              <input type="text" class="form-control" name="review"  placeholder="Input field">
               @if($errors->has('review'))
              <div style="color: red" class="help-block">
                  {{$errors->first('review')}}
              </div>
              @endif
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