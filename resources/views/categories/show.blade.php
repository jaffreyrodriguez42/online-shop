@extends('layouts.app')

@section('content')
	<h1>{{ $category->name}}</h1>

	<ul>
		@foreach($products as $product)
		<li><a href="/products/{{ $product->id }}">{{ $product->name}}</a></li>
		@endforeach
	</ul>
@endsection