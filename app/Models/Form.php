<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'fullname',
        'phonenumber',
        'emailaddress',
        'coursesection',
        'durationsection',
        'message',
    ];
}
