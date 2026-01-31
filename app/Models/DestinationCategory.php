<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinationCategory extends Model
{
    protected $table = 'destination_category';
    protected $guarded = ['slug'];

    protected $fillable = [
        'image',
        'name',
        'slug',
        'short_description',
        'seo_title',
        'seo_des',
        'seo_key',
        'is_active',
    ];

   public function setSlugAttribute($value)
    {
        if (! empty($value)) {
            $this->attributes['slug'] = $value;
        }
    }

    public function destinations()
    {
        return $this->hasMany(Destination::class, 'category_id');
    }
}
