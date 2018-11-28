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
          <h3 class="box-title">hiển thị sản phẩm</h3>
          @if(session('update'))
          <div class="alert alert-info">
            {{session('update')}}
          </div>   
        @endif
        @if(session('add'))
        <div class="alert alert-info">
            {{session('add')}}
          </div>
        @endif
        @if(session('delete'))
        <div class="alert alert-info">
          {{session('delete')}}
        </div>
        @endif
        </div>
        <div class="box-body">
          <table class="table table-hover">
          	<thead>
          		<tr>
          			<th>id</th>
          			<th>name</th>
          			<th>danh mục</th>
          			<th>ảnh</th>
          			<th>nội dung</th>
                <th>giá</th>
                <th>giá sale</th>
                <th>status</th>
                <th>chức năng</th>
          		</tr>
          	</thead>
          	<tbody>
          		@foreach($pro as $value)
          		<tr>
          			<td>{{$value->id}}</td>
          			<td>{{$value->name}}</td>
          			<td>{{$value->category->name}}</td>
                <td><img style="width: 50px;" src="{{url('/')}}/public/resouces/admin/upload/{{$value->image}}" alt=""></td>
                <td>{{$value->content}}</td>
                <td>{{$value->price}}$</td>
                <td>{{$value->sale_price}}$</td>
                
          			<td> @if($value['status']==0)
                  <span class="btn btn-warning">ẩn</span>
                  @else
                  <span class="btn btn-success">hiện</span>
                 @endif
               </td>
          			<th><a class="btn btn-warning" href="{{route('sua-san-pham',['id'=>$value->id])}}">sửa</a> <a class="btn btn-danger" onclick="return confirm('bạn chắc chắn muốn xóa chứ?') " href="{{route('xoa-san-pham',['id'=>$value->id])}}">xóa</a></th>
          		</tr>
          		@endforeach
          	</tbody>
          </table>
        </div>
        {{ $pro->links() }}
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