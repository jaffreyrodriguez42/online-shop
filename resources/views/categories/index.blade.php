@extends('layouts.app')

@section('content')
	<div class="card-header col-md-12">
		<h5>Product Categories</h5>
	</div>

	<div class="card-body row col-md-12 custyle">
		<table class="table table-striped custab">
			<thead>
				<a href="#" class="btn btn-primary btn-xs pull-right mt-3 mb-3"><b>+</b> Create new category</a
				<tr>
					<th class="align-middle">Product Category</th>
					<th class="align-middle">Description</th>
					<th class="align-middle">Status</th>
					<th class="text-center" colspan="2">Action</th>
				</tr>
			</thead>

			<tbody>
				@foreach($categories as $category)
				<tr>
					<td class="align-middle"><a href="/categories/{{$category->id }}">{{ $category->name}}</a></td>
					<td class="align-middle">{{ $category->description}}</td>
					<td class="text-right align-middle" colspan="4">
						<a href="/categories/{{$category->id}}/edit" class="btn btn-warning pl-4 pr-4 d-inline-block">Edit</a>
						<div class="d-inline-block">
							<form method="post" action="/categories/{{$category->id}}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection