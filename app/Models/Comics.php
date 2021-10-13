<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'type', 'sale_date'];
}
