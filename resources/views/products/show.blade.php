@extends('layouts.app')

@section('content')
	<h1 class="mr-3">{{ $product->name }}</h1>
	<p>{{ $product->description }}</p>
	<p>Price:</p>

	@can('isAdmin')
	<a href="/products/{{ $product->id}}/items/create" class="btn btn-primary btn-xs pull-right mt-3 mb-3"><b>+</b> Add new item</a>
	
	<span class="ml-3">Stocks</span><span class="ml-4 mr-5">{{ $itemStock}}</span>
	@endcan 
{{-- 	<form class="d-inline" method="post" action="/products/{{ $product->id}}/checkStocks">
		@csrf --}}
			<label class="" for="color">Choose Color</label>
		  	<select id="color" name="color_id">
			  	<option></option>
				  	@foreach($colors as $color)
				    	<option value="{{ $color->id}}">{{ $color->name}}</option>
				    @endforeach
		  	</select>


			<label class="ml-3" for="size">Choose Size</label>
		  	<select id="size" name="size_id">
			  	<option></option>
				  	@foreach($sizes as $size)
				    	<option value="{{ $size->id}}">{{ $size->name}}</option>
				    @endforeach
		  	</select>
		  	<input id="prod_id" type="hidden" name="product_id" value="{{ $product->id }}">

		  	<button id="checkStocksBtn" type="submit" class="btn btn-success ml-3">Check Stocks</button>
				  	
		  	<span id="stocksSpan" class="ml-3"></span>


		  	@cannot('isAdmin')
		  	<div>
		  		<span class="">Quantity: </span>
		  		<input id="quantity" type="number" name="" class="ml-2" style="width: 70px;" min="1" value="1">
		  	</div>
		  	
		  	

		  	
		  	<button id="addtocart" type="submit" class="btn btn-success d-block mt-5">Add to cart</button>
		 	@endcannot
{{-- 		  	@if()
		  	<span class="ml-5">{{ $stocks }}</span>
		  	@endif --}}

		  	
		  	
{{-- 	</form> --}}

			
	<script src="{{asset('js/checkStocks.js')}}"></script>
	<script src="{{asset('js/addtocart.js')}}"></script>


@endsection