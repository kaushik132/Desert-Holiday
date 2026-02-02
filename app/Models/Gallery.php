<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    public function category()
    {
        return $this->belongsTo(GalleryCategory::class, 'gallery_category_id', 'id');
    }
}
