	@extends('page')
	@section('content')
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{url('/')}}/public/resouces/admin/upload/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			@if(Cart::content()->count())
				
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart ">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>

							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Total</th>
							<th></th>
						</tr>
						<form action="" method="post">
							@csrf
					@foreach($cart as  $value) 
						<tr class="table-row">
							<td class="column-1">
								
									
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="{{url('/')}}/public/resouces/admin/upload/{{$value->options->image}}" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">{{$value->name}}</td>
							<td class="price column-3" id="price">${{$value->price}}</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="increment btn-num-product-down color1 flex-c-m size7 bg8 eff2" id="{{$value->rowId}}">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="qty size8 m-text18 t-center num-product" type="number" name="num-product1" value="{{$value->qty}}">

									<button class="increment btn-num-product-up color1 flex-c-m size7 bg8 eff2 " id="{{$value->rowId}}">
										<i class="fs-12 fa fa-plus " aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="total column-5"  >$36.00</td>
							<td><a class="btn btn-warning" href="{{route('xoa-gio-hang',$value->rowId)}}">xóa</a></td>
						</tr>
						
						@endforeach
						
					</table>
					</form>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->

					<button type="submit" class="flex-c-m sizefull bg1 bo-rad-23  hov1 s-text1 trans-0-4" onclick="window.location='http://localhost:88/project1/dat-hang'">
						đặt hàng
					</button>
				</div>
			</div>
</div>

			@else
			<h1>giỏ hàng trống</h1>
		@endif
	</section>

	@stop
	@section('script')
	
	<script >
		$(document).ready(function(){
		$(".increment").click(function(){
		var rowid = $(this).attr('id');
		var qty =$(this).parent().find(".qty").val();

			$.ajax({
				url:'cat-nhat/'+rowid+'/'+qty,
				type:'GET',
				cache:false,

				success:function(data){
					if(data=='oke'){
						window.location= "gio-hang"
						
					}
				}
			});
		});
	});
	</script>
	

	@stop