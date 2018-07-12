<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $connection = 'product';

    /* 1:N */
    public function series()
    {
        return $this->hasMany('App\Product\Series');
    }
}
