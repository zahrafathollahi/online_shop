@extends('layouts.layout')

@section('content')
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
                    online shop
                </div>
                <div>{{$name}}--{{$age}}</div>
             
                @foreach ($listproduct as $product)
                    {{$product -> base}}-{{$product->name}}-{{$product->price}}

                @endforeach
                <ul>
                @foreach ($product-> toppings as $topping)
                <li>{{$topping}}</li>
                </ul>
                @endforeach




                <a href="/shop" class="back"> back to all products </a>
            <a href="/shop/create" class="back"> create a product </a>
            <p class="mssg">{{session('mssg')}}</p>


                
            </div>
        </div>
 
@endsection