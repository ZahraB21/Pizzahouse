<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true; 
    protected $casts = [
        'toppings' => 'array'
    ];
}
