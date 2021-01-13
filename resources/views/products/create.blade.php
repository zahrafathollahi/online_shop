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
                <div class="wrapper">
                   <p>create new product</p>
                   <form action="/shop" method="POST">
                   @csrf
                   <label for="name">your name:</label>
                   <input type="text" id="name" name="name"> 
                   <label for="price">your price:</label>
                   <input type="text" id="price" name="price"> 
                   <label for="base">your base:</label>
                   <input type="text" id="base" name="base"> 
                   <label for="seller">your seller:</label>
                   <input type="text" id="seller" name="seller"> 
                   <fieldset>
                   <label >extra topping:</label>
                   <input type="checkbox" name="toppings[]" value="mushroom"> mushroom </br>
                   <input type="checkbox" name="toppings[]" value="topping1"> topping1 </br>
                   <input type="checkbox" name="toppings[]" value="topping2"> topping2 </br>
                   </fieldset>
                   <input type="submit" value="create">
            
                   
                   
                   
                   </form>
                </div>
            




               

                
            </div>
        </div>
 
@endsection