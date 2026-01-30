<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    protected $table = 'duration';

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'duration_id');
    }
}
