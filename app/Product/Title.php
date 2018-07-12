<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $connection = 'product';

    /* N:1 */
    public function series()
    {
        return $this->belongsTo('App\Product\Series');
    }
}
