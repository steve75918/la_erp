<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $connection = 'product';

    public function publisher()
    {
        return $this->belongsTo('App\Product\Publisher');
    }
}
