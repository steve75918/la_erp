<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Series extends Model
{
    use SoftDeletes;

    protected $connection = 'product';
    protected $guarded = [];

    /* 1:N */
    public function titles()
    {
        return $this->hasMany('App\Product\Title');
    }

    /* N:1 */
    public function brand()
    {
        return $this->belongsTo('App\Product\Brand');
    }

    /* N:1 */
    public function author()
    {
        return $this->belongsTo('App\Product\Author');
    }

    /* N:1 */
    public function type()
    {
        return $this->belongsTo('App\Product\Type');
    }

    /* N:M */
    public function categories()
    {
        return $this->belongsToMany('App\Product\Category');
    }

    /* N:M */
    public function tags()
    {
        return $this->belongsToMany('App\Product\Tag');
    }
}
