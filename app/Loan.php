<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'Loan';
    protected $fillable = [
        'user_id', 'book_id', 'due_date', 'returned_date'
    ];
}
