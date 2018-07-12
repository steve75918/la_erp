<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $connection = 'product';

    /* N:1 */
    public function brand()
    {
        return $this->belongsTo('App\Product\Brand');
    }
}
