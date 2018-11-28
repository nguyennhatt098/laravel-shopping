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
          <h3 class="box-title">Xem đơn hàng</h3>
        
        </div>
        <div class="box-body">
          <table class="table table-hover">
          	<thead>
          		<tr>
          			<th>id</th>
          			<th>tên tài khoản</th>
          			<th>email</th>
          			<th>phone</th>
          			<th>địa chỉ</th>
          			<th>phương thức thanh toán</th>
          			
          			
          			<th>status</th>
          			<th>chức năng</th>

          		</tr>
          	</thead>
          	<tbody>
          		@foreach($order as $value)
          		<tr>
          			<td>{{$value->id}}</td>
          			<td>{{$value->customer_id}}</td>
          			<td>{{$value->email}}</td>
          			<td>{{$value->phone}}</td>
          			<td>{{$value->address}}</td>
          			<td>{{$value->method_payment}}</td>
          		
          			<td>  
                  @if($value->status==1)
                  <span class="btn btn-info">đã duyệt</span>
                  
                  @elseif($value->status==2)
                  <span class="btn btn-success">đã giao hàng</span>
                  
                  @elseif($value->status==3)
                  <span class="btn btn-primary">đã hoàn thành</span>
                  @else
                  <span class="btn btn-danger">chưa duyệt</span>
                  
                  @endif
               </td>
          			<th><a class="btn btn-warning" href="{{route('chi-tiet-don-hang',['id'=>$value->id])}}">xem</a></th>
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