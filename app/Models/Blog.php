<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
}
