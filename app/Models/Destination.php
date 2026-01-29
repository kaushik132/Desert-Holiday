<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destination';
    protected $casts = [
    'inclusions' => 'array',
    'exclusions' => 'array',
    'gallery' => 'array',
];

    public function category()
    {
        return $this->belongsTo(DestinationCategory::class, 'category_id');
    }

    public function packagedetailsinsert()
    {
        return $this->hasMany(DestinationDetailsInsert::class, 'package_id','id');
    }
}
