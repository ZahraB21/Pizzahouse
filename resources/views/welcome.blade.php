@extends('Layouts.layout');


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
            Pizza house
        </div>

        <div class="links">
        <a href="/">Home</a>
            <a href="/pizzas">Pizzas</a>
            <a href="https://blog.laravel.com">Pastas</a>
            <a href="https://nova.laravel.com">Salads</a>
            <a href="https://forge.laravel.com">Sandwiches</a>
        </div>
        <div>
            <p>{{ session('message') }}</p>
        </div>
    </div>
</div>
@endsection
