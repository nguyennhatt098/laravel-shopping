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
          <div class=" col-md-6">
            <h2>thông tin đơn hàng </h2>
            <table class="table table-hover border">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>ngày đặt</th>
                  <th>tổng tiền</th>
                  <th>trạng thái</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$order_detail->order_id}}</td>
                  <td><?php echo date('d-m-Y',strtotime($order_detail->created_at)) ?></td>
                  <td>{{$order_detail->price*$order_detail->quantity}}</td>
                  <td>
                  
                  @if($order_detail->orders->status==1)
                  <span class="btn btn-info">đã duyệt</span>
                  <a href="{{route('order-stt',['id'=>$order_detail->order_id,'checked'=>0])}}" class="btn btn-danger">bỏ duyệt</a>
                  <a href="{{route('order-stt',['id'=>$order_detail->order_id,'checked'=>1])}}" class="btn btn-primary">giao hàng</a>
                  @elseif($order_detail->orders->status==2)
                  <span class="btn btn-info">đã giao hàng</span>
                  <a class="btn btn-success" href="{{route('order-stt',['id'=>$order_detail->order_id,'checked'=>2])}}" >hoàn thành</a>
                  @elseif($order_detail->orders->status==3)
                  <span class="btn btn-info">hoàn thành</span>
                  @else
                  <span class="btn btn-primary">chưa duyệt</span>
                  <a class="btn btn-success" href="{{route('order-stt',['id'=>$order_detail->order_id,'checked'=>3])}}" >duyệt</a>
                  @endif
                  
                  </td>
                  
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <h2>thông tin người mua</h2>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>họ tên</th>
                  <th>email</th>
                  <th>địa chỉ</th>
                </tr>
              </thead>
              <tbody>
               <td>{{$order->name}}</td>
               <td>{{$order->email}}</td>
               <td>{{$order->address}}</td>
              </tbody>
            </table>
          </div>
          
            
          
        </div>
        <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>image</th>
                    <th>name</th>
                    <th>quantity</th>
                    <th>price</th>
                    <th>tổng tiền</th>
                  </tr>
                </thead>

                <tbody>
                @foreach($pro as $value)
                  <tr>
                    <td><img width="100px" src="{{url('/')}}/public/resouces/admin/upload/{{$value->product->image}}" alt=""> </td>
                    <td>{{$value->product->name}}</td>
                    <td>{{$value->quantity}}</td>
                    <td>${{$value->price}}</td>
                    <td>${{$value->price*$value->quantity}}</td>
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