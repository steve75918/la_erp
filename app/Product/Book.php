<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $connection = 'product';

    /* N:1 */
    public function series()
    {
        return $this->belongsTo('App\Product\Series');
    }
}
