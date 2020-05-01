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
            {{ $pizza->name }} Pizza
        </div>
        <div class="links">
        <a href="/pizzas">Back</a><br />
        Pizza Details: 
            {{ $pizza-> base }}, {{ $pizza->type }}<br />
            @if($pizza->toppings != null) 
                Pizza Extra Toppings: 
                @foreach($pizza->toppings as $topping)
                    {{ $topping }} | 
                @endforeach
                <br />
            @endif
            <br/>
        
        </div>
    </div>
</div>
@endsection