<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends Model
{
    use SoftDeletes;

    protected $connection = 'product';
    protected $fillable = ['name', 'origin_name'];

    public function brands()
    {
        return $this->hasMany('App\Product\Brand');
    }
}
