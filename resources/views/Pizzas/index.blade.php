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
    <div class="container">
        <div class="row " class="p2">
            <div class="col-12 col-md-6">
                <div class="section flex-center">
                    <img src="/images/volcano.jpg" alt="Volcano image">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="section">
                <h1 class="text-center display-3" class="flex-start">{{$pizzaList[0]->name}}</h1>
                    <div class="main-content">
                        Toppings: 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection