<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
     
     
     'product',
     'quantity',
     'price',
     'total',
     'status',
     'user_id',
     
    ];
}
