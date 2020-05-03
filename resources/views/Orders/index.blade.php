@extends ('Layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <!-- @if (Route::has('login'))
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
    @endif -->

    <div class="content" id="orders">
        <div class="row">
            <div class="col-12">
                <div class="title m-b-md">
                    <h1>Order</h1>
                </div>
            <h2>Please Register or Login to Proceed</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6" id="col_1">
                <h2>Register</h2>
                <p>Don't have an account ? </p>
                <form action="{{ route('register') }}" method="get">
                    <button>Sign Up</button>
                </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6" id="col_2">
                <h2>Login</h2>
                <p>Already have an account ? </p>
                <form action="{{ route('login') }}" method="get">
                        <button>Login</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection