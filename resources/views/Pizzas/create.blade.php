@extends ('Layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/') }}">Back</a>
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content create-pizza mt-5">
        <div class="title m-b-md">
            Create Pizza
        </div>
        <div class="container flex-center">
            <div class="row justify-content-center">
            <div class="col-md-10 ">
                <div class="card">
                    <div class="card-header">Create your own pizza</div>
                    <div class="card-body">
                        <form action="/pizzas" method="post">
                            @csrf
                            <div class="form-group row pb-2">
                                <label for="name" class="col-md-4 col-form-label text-md-right text-left">Name: </label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder = "Enter your name here" name="name" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                            </div>

                            <div class="form-group row pb-2">
                                <label for="type" class="col-md-4 col-form-label text-md-right text-left">Type: </label>

                                <div class="col-md-6">
                                    <!-- <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" placeholder = "Select the type of pizza" name="type"  required autocomplete="name" autofocus> -->

                                    <select name="type" id="type">
                                        <option value="meat">Meat</option>
                                        <option value="veggie">Veggie</option>
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row pb-2">
                                <label for="base" class="col-md-4 col-form-label text-md-right text-left">Base: </label>

                                <div class="col-md-6">
                                    <!-- <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" placeholder = "Select the type of pizza" name="type"  required autocomplete="name" autofocus> -->

                                    <select name="base" id="base">
                                        <option value="red sauce" active>Red Sauce</option>
                                        <option value="garlic sause">Garlic Sauce</option>
                                    </select>
                                    @error('base')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                           
                            <div class="form-group row pb-2">
                                <label for="toppings" class="col-md-4 col-form-label text-md-right text-left">Toppings: </label>

                                <div class="col-md-6">
                                    <!-- <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" placeholder = "Select the type of pizza" name="type"  required autocomplete="name" autofocus> -->

                                    <fieldset>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6">
                                                <input type="checkbox" name="toppings[]" value='cheese' active>Cheese <br />
                                                </div>
                                                <div class="col-6">
                                                <input type="checkbox" name="toppings[]" value='mushrooms'>Mushrooms <br />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                <input type="checkbox" name="toppings[]" value='peppers'>Peppers <br />
                                                </div>
                                                <div class="col-6">
                                                <input type="checkbox" name="toppings[]" value='olives'>Olives <br />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                <input type="checkbox" name="toppings[]" value='chicken'>Chicken <br />
                                                </div>
                                                <div class="col-6">
                                                <input type="checkbox" name="toppings[]" value='tomato'>Tomato <br />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @error('toppings')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <div class="container row-center">
                                        <button type="submit" class="btn btn-dark">
                                            Order Pizza
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form> 
                        <!-- <form action="/pizzas" method='get'>
                            @csrf
                            @method('DELETE')
                            <a href="/">
                                <button type="submit" class="btn btn-danger">Cancel Order</button>
                            </a>
                        </form>         -->
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
