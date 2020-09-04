@extends('layouts.app')

@section('content')



                <div class="links">
                    <a class="category-link" href="https://laravel.com/docs">Women's Wear</a>
                    <a class="category-link" href="https://laracasts.com">Men's Wear</a>
                    <a class="category-link" href="https://laravel-news.com">Kid's Wear</a>
                    <a class="category-link" href="https://laravel-news.com">Shoes</a>
                    <a class="category-link" href="https://laravel-news.com">Toys</a>
                    <a class="category-link" href="https://laravel-news.com">Gadgets</a>

                </div>
                <!-- start of card -->
                <div class="container mt-5">
                  <div class="card-deck mb-3 text-center">
                    @foreach($products as $key => $product)
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal"><a href="products/{{ $product->id }}">{{ $product->name }}</a></h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">Price: </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>{{ $product->description}}</li>

                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Add to cart</button>
                      </div>
                    </div>
                      @if(++$key % 3 == 0)
                        <div class="w-100"></div>
                      @endif
                    @endforeach
                   
                  </div>
                  <!-- end of card -->
            </div>
        </div>
      </div>
@endsection
