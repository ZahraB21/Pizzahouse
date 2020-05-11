<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pizza; 
class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizza::all();
        return $pizzas;
    }
}
