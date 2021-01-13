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
                    {{$product -> name}}
                </div>
                <ul>
                @foreach ($product-> toppings as $topping)
                <li>{{$topping}}</li>
                </ul>
                @endforeach

                <form action="/shop/{{$product->id}}" method="POST">
                @csrf
               
                <button>delete it</button>
                </form>
           



               

                
            </div>
        </div>
 
@endsection