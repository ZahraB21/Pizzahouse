@extends ('Layouts.layout')

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
            Create Pizza
        </div>
        <form action="/pizzas" method="post">
        @csrf
            <label for="name">Pizza Name: </label>
            <input type="text" name="name" id="name">
            <label for="type">Pizza Type: </label>
            <select name="type" id="type">
                <option value="meat">Meat</option>
                <option value="veggie">Veggie</option>
            </select>
            <label for="base">Pizza Base: </label>
            <select name="base" id="base">
                <option value="red sauce">Red Sauce</option>
                <option value="ranch sause">Ranch Sauce</option>
                <option value="garlic sause">Garlic Sauce</option>
            </select>
            <fieldset>
                <label>Extra Toppings:</label>
                <input type="checkbox" name="toppings[]" value='mushrooms'>Mushrooms <br />
                <input type="checkbox" name="toppings[]" value='peppers'>Peppers <br />
                <input type="checkbox" name="toppings[]" value='olives'>Olives <br />
            </fieldset>
            <input type="submit" value='Order Pizza'>
        </form>
    </div>
</div>
@endsection