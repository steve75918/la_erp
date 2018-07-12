<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $connection = 'product';

    public function brands()
    {
        return $this->hasMany('App\Product\Brand');
    }
}
