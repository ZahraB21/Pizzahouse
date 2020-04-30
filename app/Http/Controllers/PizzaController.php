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
        $pizza = Pizza::find($id);

        if($pizza != null)
            return view('Pizzas.show', ['pizza' => $pizza]);
        else
            return view('Pizzas.index', ['pizzaList' => $this->pizzaList]);
    }

    public function create() {
        return view('Pizzas.create');
    }

    public function store(){
        $name = request('name');
        // $type = request()->get('type');
        // $base = request()->get('base');

        error_log($name);
        return redirect('/');
    }
}
