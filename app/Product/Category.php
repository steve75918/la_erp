<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $connection = 'product';
    protected $guarded = [];

    /* N:M */
    public function series()
    {
        return $this->belongsToMany('App\Product\Series');
    }
}
