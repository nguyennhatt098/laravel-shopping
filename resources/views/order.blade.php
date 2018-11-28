@extends('page')
@section('content')
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url('{{url('/')}}/public/resouces/admin/upload/heading-pages-02.jpg');">
		<h2 class="l-text2 t-center">
			Women
		</h2>
		<p class="m-text13 t-center">
			New Arrivals Women Collection 2018
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">

							@foreach($cat as $cats)
							<li class="p-t-4">
								<a href="{{route('san-pham',['id'=>$cats->id])}}" class="s-text13 active1">
									{{$cats->name}}
								</a>
							</li>
							@endforeach
							
						</ul>

						<!--  -->
						<h4 class="m-text14 p-b-32">
							Filters
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
										Filter
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
								</div>
							</div>
						</div>

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Color
							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<h1>Đơn hàng </h1>
						</div>
						
						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
					</div>

					
					@if(Auth::check())
					<form action="" method="POST" role="form">
						@csrf
					
						<div class="form-group">
							<label for="">name</label>
							<input type="text" class="form-control" name="name" placeholder="Input field">
							@if($errors->has('name'))
							<div style="color: red" class="alert">
								{{$errors->first('name')}}
							</div>
							
							@endif
							<label for="">email</label>
							<input type="text" class="form-control" name="email" placeholder="Input field">
							@if($errors->has('email'))
							<div style="color: red" class="alert">
								{{$errors->first('email')}}
							</div>
							@endif
							<label for="">phone</label>
							<input type="text" class="form-control" name="phone" placeholder="Input field">
							@if($errors->has('phone'))
							<div style="color: red" class="alert">
								{{$errors->first('phone')}}
							</div>
							@endif
							<label for="">address</label>
							<input type="text" class="form-control" name="address" placeholder="Input field">
							@if($errors->has('address'))
							<div style="color: red" class="alert">
								{{$errors->first('address')}}
							</div>
							@endif
							<label for="">method payment</label>
							
							<select style="height: 35px;"  class="form-control"  name="method_payment" required="required">
								<option value="shipping method">shipping method</option>
								<option value="payment method">payment method</option>
							</select>
							<br>
						</div>
					
						
					
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
					<br>
					<div class="table-responsive">
						<h1>thông tin đơn hàng</h1>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>image</th>
									<th>name</th>
									<th>price</th>
									<th>quantity</th>
									<th>total</th>
								</tr>
							</thead>
							<tbody>
								@foreach($cart as $value)
								<tr>
									<td><img style="height: 100px;" src="{{url('/')}}/public/resouces/admin/upload/{{$value->options->image}}" alt=""></td>
									<td>{{$value->name}}</td>
									<td>${{$value->price}}</td>
									<td>{{$value->qty}}</td>
									<th>${{$value->price*$value->qty}}</th>
								</tr>
								@endforeach
							</tbody>
						</table>

					</div>
					<h4 style="text-align: right;">Tổng tiền: ${{$tt}}</h4>
					@else
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>bạn chưa đăng nhập</strong>  <a href="{{route('login')}}">nhấp vào đây để đăng nhập</a>
					</div>
					@endif	
						
					

					<!-- Pagination -->
					
				</div>
			</div>
		</div>
	</section>

@stop