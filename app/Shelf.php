<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    protected $table = 'shelf';
    protected $fillable = [
        'shelf_name',
    ];
}
