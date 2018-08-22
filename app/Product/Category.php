<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use SoftDeletes;
    use NodeTrait;

    protected $connection = 'product';
    protected $guarded = [];

    /* N:M */
    public function series()
    {
        return $this->belongsToMany('App\Product\Series');
    }
}
