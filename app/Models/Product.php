<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Hasfactory;

class Product extends Model
{
    use Hasfactory;

    protected $table = 'product_table';

    protected $fillable = [
        'brand',
        'model',
        'year',
        'price',
        'images',
        'description',
        'contact',
    ];
    
    
}
