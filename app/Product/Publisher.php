<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $connection = 'product';

    protected $fillable = ['name', 'origin_name'];

    public function brands()
    {
        return $this->hasMany('App\Product\Brand');
    }
}
