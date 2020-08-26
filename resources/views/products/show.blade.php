@extends('layouts.app')

@section('content')
	<h1 class="d-inline mr-3">{{ $product->name }}</h1>
	<a href="/products/{{ $product->id}}/items/create" class="btn btn-primary btn-xs pull-right mt-3 mb-3"><b>+</b> Add new item</a> 
	<span class="ml-5">Stocks</span><span class="ml-4">{{ $itemStock}}</span>

	<form class="d-inline" method="post" action="/products/{{ $product->id}}/checkStocks">
		@csrf
			<label class="ml-5" for="color">Choose Color</label>
		  	<select id="color" name="color_id">
			  	<option selected ></option>
				  	@foreach($colors as $color)
				    	<option value="{{ $color->id}}">{{ $color->name}}</option>
				    @endforeach
		  	</select>


			<label class="ml-3" for="size">Choose Size</label>
		  	<select id="size" name="size_id">
			  	<option selected ></option>
				  	@foreach($sizes as $size)
				    	<option value="{{ $size->id}}">{{ $size->name}}</option>
				    @endforeach
		  	</select>

		  	<button class="btn btn-success ml-3">Check Stocks</button>

		  	
{{-- 		  	@if()
		  	<span class="ml-5">{{ $stocks }}</span>
		  	@endif --}}

		  	{{-- <span class="ml-5">{{ $stocks }}</span> --}}
		  	
	</form>





	<p>{{ $product->description }}</p>

@endsection