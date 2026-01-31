<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

      protected $guarded = ['slug'];

          public function setSlugAttribute($value)
{
    if (! empty($value)) {
        $this->attributes['slug'] = $value;
    }
}

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
}
