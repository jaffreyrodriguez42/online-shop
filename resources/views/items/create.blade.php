@extends('layouts.app')

@section('content')
	<form method="post" action="/products/{{ $product->id}}/items">
		@csrf
	  <div class="form-row">
	    <div class="form-group col-md-8">
	      <label for="name">Item Name</label>
	      <input type="text" class="form-control" id="item" name="name" value="{{ $product->name}}" readonly="readonly">
	      @error('name')
	          <div class="alert alert-danger">{{ $message }}</div>
	      @enderror
	    </div>

	    <div class="form-group col-md-8">
	    	<label for="color">Choose Color</label>
	      	<select id="color" class="form-control" name="color_id">
	      	<option selected ></option>
	      	@foreach($colors as $color)
	        <option value="{{ $color->id}}">{{ $color->name}}</option>
	        @endforeach
	      </select>
	      @error('color_id')
	          <div class="alert alert-danger">{{ $message }}</div>
	      @enderror
	    </div>

	    <div class="form-group col-md-8">
	    	<label for="size">Choose Size</label>
	      	<select id="size" class="form-control" name="size_id">
	      	<option selected ></option>
	      	@foreach($sizes as $size)
	        <option value="{{ $size->id}}">{{ $size->name}}</option>
	        @endforeach
	      </select>
	      @error('size_id')
	          <div class="alert alert-danger">{{ $message }}</div>
	      @enderror
	    </div>
	</div>

	  <button type="submit" class="btn btn-primary">Add Item</button>
	</form>
@endsection