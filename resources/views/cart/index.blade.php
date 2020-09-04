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
			<tr>
				<th scope="row">{{ session('prod_id')}}</th>
				<th scope="row">{{ session('prod_name')}}</th>
				<th scope="row">{{ session('color_name')}}</th>
				<th scope="row">{{ session('size_id')}}</th>
				<th scope="row">{{ session('quantity')}}</th>
			</tr>
		</tbody>
	</table>
@endsection()