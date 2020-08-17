@extends('layouts.app')

@section('content')
		<h1>Jaf</h1>
	    <!-- start of card -->
	    <div class="container mt-5">
	      <div class="row card-deck mb-3 text-center">

	      	@foreach($products as $product)
		        <div class="col-md-4 card mb-4 shadow-sm">
		          <div class="card-header">
		            <h4 class="my-0 font-weight-normal">{{ $product->name}}</h4>
		          </div>
		          <div class="card-body">
		            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
		            <ul class="list-unstyled mt-3 mb-4">
		              <li>{{ $product->description}}</li>
		            </ul>
		            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Add to cart</button>
		          </div>
		        </div>
		        @if($product->id % 3 == 0 )
		        	<div class="w-100"></div>
		        @endif
		        
	        @endforeach
	      </div>

	     </div>
	      <!-- end of card -->

@endsection