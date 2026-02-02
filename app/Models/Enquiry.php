<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'enquiry';

    protected $fillable = [
        'package_id',
        'people',
        'name',
        'email',
        'phone',
        'date_of_travel',
        'country',
        'city',
        'message',
        'is_active',
    ];
}
