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
          <h3 class="box-title">Xem sản phẩm</h3>
          @if(session('add'))
          <div class="alert alert-info">
             {{session('add')}}
          </div>
        @endif
        @if(session('create'))
         <div class="alert alert-info">
            {{session('create')}}
          </div>
        @endif
        </div>
        <div class="box-body">
          <table class="table table-hover">
          	<thead>
          		<tr>
          			<th>id</th>
          			<th>name</th>
          			
          			<th>status</th>
          			<th>chức năng</th>

          		</tr>
          	</thead>
          	<tbody>
          		@foreach($cat as $value)
          		<tr>
          			<td>{{$value->id}}</td>
          			<td>{{$value->name}}</td>
          			
          			<td> @if($value['status']==0)
                  <span class="btn btn-warning">ẩn</span>
                  @else
                  <span class="btn btn-success">hiện</span>
                 @endif
               </td>
          			<th><a class="btn btn-warning" href="{{route('sua-danh-muc',['id'=>$value->id])}}">sửa</a> <a class="btn btn-danger" href="{{route('xoa-danh-muc',['id'=>$value->id])}}">xóa</a></th>
          		</tr>
          		@endforeach
          	</tbody>
          </table>
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