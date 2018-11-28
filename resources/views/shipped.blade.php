<!-- Latest compiled and minified CSS & JS -->

<div class="table-responsive">
	<h1>đặt hàng thành công </h1>
	<h2>hi {{$name}}!</h2>
	<p>order id:#{{$order->id}}</p>
	<p>created: {{$order->created_at}} </p>
	<table  class="table table-hover">
		<thead>
			<tr>
				<th >STT</th>
				<th>name</th>
				<th>quantity</th>
				<th>price</th>
			</tr>
		</thead>
		<tbody>
@php
			$stt=1;
			@endphp
			@foreach($cart as  $value)

			<tr>
				<td>{{$stt++}}</td>
				<td>{{$value->name}} </td>
				<td>{{$value->qty}} </td>
				<td>{{$value->subtotal()}} </td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>