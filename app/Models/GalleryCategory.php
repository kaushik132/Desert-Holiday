<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    protected $table = 'gallery_category';


    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'gallery_category_id', 'id');
    }
}
