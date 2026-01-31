<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_category';
    protected $guarded = ['slug'];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'blog_category_id');
    }

    public function setSlugAttribute($value)
{
    if (! empty($value)) {
        $this->attributes['slug'] = $value;
    }
}

}
