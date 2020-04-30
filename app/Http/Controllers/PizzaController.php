<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    private $pizzaList;

    function __construct(){
        $this->pizzaList = Pizza::all();
    }
    public function index(){
        //$pizzaList = ['Hawaiian','Pepperoni','Cheese', 'Volcano' , 'Supreme'];
        return view('Pizzas.index', ['pizzaList' => $this->pizzaList]);
    }

    public function show($id){
        error_log($id);
        $pizza = Pizza::where('name',$id)->get()->first();

        if($pizza != null)
            return view('Pizzas.show', ['pizza' => $pizza]);
        else
            return view('Pizzas.index', ['pizzaList' => $this->pizzaList]);
    }

    public function create() {
        return view('Pizzas.create');
    }

    public function store(){
        $pizza = new Pizza();

        $pizza->type = request('type');
        $pizza->name = request('name');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save();

        return redirect('/')->with('message', 'Thank you for your order');
    }
}
