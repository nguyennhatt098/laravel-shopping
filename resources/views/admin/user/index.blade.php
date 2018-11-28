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
          <h3 class="box-title">Xem danh sách người dùng</h3>
         
        </div>
        <div class="box-body">
         
            <h2>thông tin người dùng </h2>
            <table class="table table-hover border">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>tên người dùng</th>
                  <th>email</th>
                  <th>số điện thoại</th>
                  <th>địa chỉ</th>
                  <th>sinh nhật</th>
                  <th>giới tính</th>
                  <th>ngày tạo</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              	@foreach($user as $value)
                <tr>
                  <td>{{$value->id}}</td>
                  <td>{{$value->username}}</td>
                  <td>{{$value->email}}</td>
                  <td>{{$value->phone_number}}</td>
                  <td>{{$value->address}}</td>
                  <td><?php echo date('d-m-Y',strtotime($value->birthday)) ?></td>
                  <td>{{$value->gender}}</td>

                  <td><?php echo date('d-m-Y',strtotime($value->created_at)) ?></td>
                 <td>
                 	<a class="btn btn-warning" href="{{route('sua-tai-khoan',['id'=>$value->id])}}">sửa</a>
                 	
                 </td>
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
