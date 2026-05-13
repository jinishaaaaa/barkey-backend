<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [
        'fullname',
        'phone number',
        'email address',
        'course selection',
        'duration selection',
        'message',
    ];
}
