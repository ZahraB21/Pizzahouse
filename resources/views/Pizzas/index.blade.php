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
                @if($pizza)
                    <a href="#{{ $pizza->name }}">{{$pizza->name}}</a>
                @endif
            @endforeach
            <a href="/pizzas/create">Create</a>
            <a href="/pizzas/react">React</a>
        </div>
        <p class="mt-3 text-success">{{ session('message') }}</p>
    </div>
</div>

@foreach ($pizzaList as $pizza)
<div class="flex-center position-ref full-height" id = "{{$pizza->name}}">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="section flex-center">
                    <img src="/images/{{ $pizza->name }}.jpg" alt="Volcano image" class="img-fluid" >
                </div>
            </div>
            <div class="col-12 col-md-6 col_2">
                <div class="section">
                <h1 class="text-center" class="flex-start">{{$pizza->name}} Pizza</h1>
                    <div class="main-content">
                        Toppings: <br />
                        <p class="pl-5">
                        @foreach($pizza->toppings as $topping)
                        {{ $topping }} <span>|</span>
                        @endforeach
                        </p>
                        Base: </br />
                        <p class="pl-5">{{$pizza->base}}</p>
                        Type: <br />
                        <p class="pl-5">{{$pizza->type}} Pizza</p>
                        <form action="/order/" method="get">
                            <div class="container flex-center">
                                <div class="row ">
                                    <div class="col row-center">
                                        <button type="submit" class="btn btn-dark">
                                            Order Pizza
                                        </button>
                                        <a href="/" class="btn btn-dark">
                                            <i class="fa fa-arrow-up"></i>                                         
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div> 
<hr>
@endforeach
@endsection