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
          <h3 class="box-title">Sửa sản phẩm</h3>

          
        </div>
        <div class="box-body">
          <form action="" method="POST" role="form" enctype="multipart/form-data">
          	<legend>Form title</legend>
          <input type="hidden" name="_token" value="{{csrf_token()}}">

          	<div class="form-group">
          		<label for="">name</label>
              
          		<input type="text" class="form-control" name="name" value="{{$pro->name}}" placeholder="Input field">
              @if($errors->has('name'))
              <div style="color: red" class="help-block">
                {{$errors->first('name')}}
              </div>
              @endif
              <label for="">danh mục</label>
              <select name="category_id" id="input" class="form-control" required="required">
                @foreach($cat as $value)
                <option value="{{$value->id}}" @if($value->id==$pro->category_id)
                <?php echo 'selected'; ?>  
                  @endif
                  >{{$value->name}}</option>
                @endforeach
              </select>
              @if($errors->has('category_id'))
              <div style="color: red" class="help-block">
                {{$errors->first('category_id')}}
              </div>
              @endif
             <div>
              <label for="">ảnh</label>
              
              <input type="file" class="form-control" name="image" value="" placeholder="Input field">
              <img style="height: 100px;" src="{{url('/')}}/public/resouces/admin/upload/{{$pro->image}}" alt="">
              </div>
              @if($errors->has('image'))
              <div style="color: red" class="help-block">
                {{$errors->first('image')}}
              </div>
              @endif
              <label for="">content</label>
              
              <input type="text" class="form-control" name="content" value="{{$pro->content}}" placeholder="Input field">
              @if($errors->has('content'))
              <div style="color: red" class="help-block">
                {{$errors->first('content')}}
              </div>
              @endif
              <label for="">giá gốc</label>
              
              <input type="text" class="form-control" name="price" value="{{$pro->price}}" placeholder="Input field">
               @if($errors->has('price'))
              <div style="color: red" class="help-block">
                {{$errors->first('sale_price')}}
              </div>
              @endif
               <label for="">giá sale</label>
              
              <input type="text" class="form-control" name="sale_price" value="{{$pro->sale_price}}" placeholder="Input field">
               @if($errors->has('sale_price'))
              <div style="color: red" class="help-block">
                {{$errors->first('sale_price')}}
              </div>
              @endif
               <label for="">mô tả</label>
              
              <input type="text" class="form-control" name="description" value="{{$pro->description}}" placeholder="Input field">
               @if($errors->has('description'))
              <div style="color: red" class="help-block">
                {{$errors->first('description')}}
              </div>
              @endif
          		<label for="">status</label>
              <select name="status" id="inputStatus" class="form-control" required="required">
                <option value="1" @if($pro->status==1)
                  <?php echo 'selected' ?>
                    @endif
                  >hiện</option>
                <option value="0" @if($pro->status==0)
                  <?php echo 'selected' ?>
                    @endif>ẩn</option>
              </select>
          		<!-- <input type="text" class="form-control" name="status" value="{{$pro->status}}" placeholder="Input field"> -->
          		  <label for="">review</label>
              <input type="text" class="form-control" name="review" value="{{$pro->review}}" placeholder="Input field">
              
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