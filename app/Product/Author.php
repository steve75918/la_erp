<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    protected $connection = 'product';

    /* N:M */
    public function series()
    {
        return $this->belongsToMany('App\Product\Series');
    }
}
