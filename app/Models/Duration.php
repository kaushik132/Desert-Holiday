<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    protected $table = 'duration';
    protected $guarded = ['slug'];

public function setSlugAttribute($value)
    {
        if (! empty($value)) {
            $this->attributes['slug'] = $value;
        }
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'duration_id');
    }
}
