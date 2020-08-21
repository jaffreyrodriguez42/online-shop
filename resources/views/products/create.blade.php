@extends('layouts.app')

@section('content')
	<form method="post" action="/products">
		@csrf
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="product">Product Name</label>
	      <input type="text" class="form-control" id="product" name="name" value="{{ old('product')}}">
	      @error('name')
	          <div class="alert alert-danger">{{ $message }}</div>
	      @enderror
	    </div>
	    <div class="form-group col-md-6">
	      <label for="description">Product Description</label>
	      <input type="text" class="form-control" id="description" name="description" value="{{ old('description')}}">
	      @error('description')
	          <div class="alert alert-danger">{{ $message }}</div>
	      @enderror
	    </div>

	    <div class="form-group col-md-12">
	    	<label for="description">Choose Category</label>
	      	<select id="category" class="form-control" name="category_id">
	      	<option selected ></option>
	      	@foreach($categories as $category)
	        <option value="{{ $category->id}}">{{ $category->name}}</option>
	        @endforeach
	      </select>
	      @error('category_id')
	          <div class="alert alert-danger">{{ $message }}</div>
	      @enderror
	    </div>

	  <button type="submit" class="btn btn-primary">Add Product</button>
	</form>
@endsection