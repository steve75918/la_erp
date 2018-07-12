<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $connection = 'product';

    /* 1:N */
    public function series()
    {
        return $this->hasMany('App\Product\Series');
    }

    /* N:1 */
    public function publisher()
    {
        return $this->belongsTo('App\Product\Publisher');
    }
}
