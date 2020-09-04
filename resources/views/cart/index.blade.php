@extends('layouts.app')

@section('content')
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Prod Id</th>
				<th scope="col">Product Name</th>
				<th scope="col">Product Color</th>
				<th scope="col">Product Size</th>
				<th scope="col">Quantity</th>
				<th scope="col">Price</th>
			</tr>
		</thead>
		<tbody>
		@if(session()->exists('item'))
			@foreach($items as $key => $item)
			<tr>
				<th scope="row">{{ $items[$key]['prod_id']}}</th>
				<th scope="row">{{ $items[$key]['prod_name']}}</th>
				<th scope="row">{{ $items[$key]['color_name']}}</th>
				<th scope="row">{{ $items[$key]['size_name']}}</th>
				<th scope="row">{{ $items[$key]['quantity']}}</th>
{{-- 				<th scope="row">{{ session('item')[0]['prod_name']}}</th>
				<th scope="row">{{ session('item')[0]['color_name']}}</th>
				<th scope="row">{{ session('item')[0]['size_name']}}</th>
				<th scope="row">{{ session('item')[0]['quantity']}}</th> --}}
			</tr>
			@endforeach
		@else
			<p>No items in the cart</p>
		@endif
		</tbody>
	</table>
@endsection()