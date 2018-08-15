<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use SoftDeletes;
    use Illuminate\Database\Eloquent\SoftDeletes;

    /* 1:N */
    public function series()
    {
        return $this->hasMany('App\Product\Series');
    }
}
