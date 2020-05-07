<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('Orders.index');
    }

    public function show($id){
        // must do
    }
}
