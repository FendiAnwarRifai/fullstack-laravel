<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = "vehicles";

    protected $primaryKey = "id";

    protected $fillable = [
        'name', 'price', 'stock',
    ];
}
