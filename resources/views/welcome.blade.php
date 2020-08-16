<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- to add bootsrap in blade -->
        <link rel="stylesheet" href="{{ asset('css/app.css')  }}"> 


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Jaf's Online Shop
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Women's Wear</a>
                    <a href="https://laracasts.com">Men's Wear</a>
                    <a href="https://laravel-news.com">Kid's Wear</a>
                    <a href="https://laravel-news.com">Shoes</a>
                    <a href="https://laravel-news.com">Toys</a>
                    <a href="https://laravel-news.com">Gadgets</a>

                </div>
                <!-- start of card -->
                <div class="container mt-5">
                  <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Free</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>10 users included</li>
                          <li>2 GB of storage</li>
                          <li>Email support</li>
                          <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                      </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Pro</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>20 users included</li>
                          <li>10 GB of storage</li>
                          <li>Priority email support</li>
                          <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                      </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Enterprise</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>30 users included</li>
                          <li>15 GB of storage</li>
                          <li>Phone and email support</li>
                          <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                      </div>
                    </div>
                  </div>
                  <!-- end of card -->
            </div>
        </div>
    </body>
</html>
