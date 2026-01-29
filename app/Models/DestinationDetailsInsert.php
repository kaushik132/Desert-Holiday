<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinationDetailsInsert extends Model
{
    protected $table = 'destination_details_insert';

    protected $fillable = ['order_num','name','description','package_id'];

    public function packagedata()
    {
        return $this->belongsTo(Destination::class, 'package_id','id');
    }
}
