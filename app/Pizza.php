<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true; //If you dont want the auto-increment
    protected $casts = [
        'toppings' => 'array'
    ];
}
