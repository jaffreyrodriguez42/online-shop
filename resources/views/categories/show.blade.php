@extends('layouts.app')

@section('content')
	<h1 class="d-inline mr-3">{{ $category->name}}</h1>
	<div class="d-inline p-3">
		<a href="/products/create" class="btn btn-primary btn-xs pull-right mt-3 mb-3"><b>+</b> Create new product</a>
	</div>
	
	<ul>
		@foreach($products as $product)
		<li><a href="/products/{{ $product->id }}">{{ $product->name}}</a></li>

		@endforeach
	</ul>
@endsection