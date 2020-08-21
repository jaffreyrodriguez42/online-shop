@extends('layouts.app')

@section('content')
	<h1>Edit Category</h1>
	<form method="post" action="/categories/{{ $category->id }}">
		@csrf
		@method('PUT')

	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="product">Category Name</label>
	      <input type="text" class="form-control" id="product" name="name" value="{{ $category->name }}">
	      @error('name')
	          <div class="alert alert-danger">{{ $message }}</div>
	      @enderror
	    </div>
	    <div class="form-group col-md-6">
	      <label for="description">Category Description</label>
	      <input type="text" class="form-control" id="description" name="description" value="{{ $category->description}}">
	      @error('description')
	          <div class="alert alert-danger">{{ $message }}</div>
	      @enderror
	    </div>

	  <button type="submit" class="btn btn-primary">Update category</button>
	</form>
@endsection