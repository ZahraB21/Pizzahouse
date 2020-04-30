<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizzaList = Pizza::all();
        //$pizzaList = ['Hawaiian','Pepperoni','Cheese', 'Volcano' , 'Supreme'];
        return view('Pizzas.index', ['pizzaList' => $pizzaList]);
    }

    public function show($id){
        return view('Pizzas.show', ['id' => $id]);
    }

    public function create() {
        return view('Pizzas.create');
    }
}
