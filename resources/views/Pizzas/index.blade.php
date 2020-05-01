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
            Pizzas
        </div>

        <div class="links">
            <a href="/">Home</a>
            @foreach ($pizzaList as $pizza)
            <a href="#{{ $pizza->name }}">{{$pizza->name}}</a>
            @endforeach
            <a href="/pizzas/create">Create</a>
        </div>
    </div>
</div>

<div class="flex-center position-ref full-height" id = "Volcano">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="section">
                <img src="/images/volcano.jpg" alt="Volcano image" width="300" height=400>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="section">
                <img src="/images/volcano.jpg" alt="Volcano image" width="300" height=400>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="section">
                <img src="/images/volcano.jpg" alt="Volcano image" width="300" height=400>
            </div>
        </div>
    </div>
</div> 
@endsection