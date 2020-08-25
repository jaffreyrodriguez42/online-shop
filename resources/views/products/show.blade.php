@extends('layouts.app')

@section('content')
	<h1 class="d-inline mr-3">{{ $product->name }}</h1>
	<a href="/products/{{ $product->id}}/items/create" class="btn btn-primary btn-xs pull-right mt-3 mb-3"><b>+</b> Add new item</a>
	<p>{{ $product->description }}</p>

@endsection