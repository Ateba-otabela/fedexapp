<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'file',
        'category',
        'type',
        'name',
        'email',
        'user_id',
        'quantity',
        'total'
    ];

}
