<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;

    protected $connection = 'product';

    /* 1:N */
    public function series()
    {
        return $this->hasMany('App\Product\Series');
    }
}
