@extends('layouts.app')

@section('content')
	<table class="table">
		<thead>
			<tr>
				{{-- <th scope="col">Prod Id</th> --}}
				<th scope="col">Product Name</th>
				<th scope="col">Product Color</th>
				<th scope="col">Product Size</th>
				<th scope="col">Quantity</th>
				<th scope="col">Price</th>
				<th scope="col">SubTotal</th>
			</tr>
		</thead>
		<tbody>

			@php	
				$total = 0;
				$subtotal = 0;
			@endphp
			@foreach($items as $key => $item)
				@php
					$total = $total + ($items[$key]['price'] * $items[$key]['quantity']);
					$subtotal = $items[$key]['price'] * $items[$key]['quantity'];
				@endphp
			<tr>
				{{-- <td scope="row"></th> --}}
				<td scope="row">{{ $items[$key]['name']}}</td>
				<td scope="row">{{ $items[$key]['color_id']}}</td>
				<td scope="row">{{ $items[$key]['size_id']}}</td>
				<td scope="row">{{ $items[$key]['quantity']}}</td>
				<td scope="row">{{ $items[$key]['price']}}</td>
				<td scope="row">{{ $subtotal }}</td>

{{-- 				<th scope="row">{{ session('item')[0]['prod_name']}}</th>
				<th scope="row">{{ session('item')[0]['color_name']}}</th>
				<th scope="row">{{ session('item')[0]['size_name']}}</th>
				<th scope="row">{{ session('item')[0]['quantity']}}</th> --}}
			</tr>
			@endforeach
		</tbody>
	</table>
		<div id="total">
			<div>
				<span class="mt-5">Total: </span>
				<span class="ml-5">{{ $total }}</span>
				<div class="mt-5">
					<a href="/placeOrder" class="btn btn-success">Place Order</a>
				</div>
				
			</div>
		</div>


@endsection()