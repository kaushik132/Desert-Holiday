<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'travel_date',
        'group_size',
        'interested_destination',
        'subject',
        'message',
    ];


    }
