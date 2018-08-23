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

    // Mutator for prefixed name
    public function getPrefixedNameAttribute()
    {
        if ($this->depth > 0) {
            $prefix = '|';
            foreach (range(0, $this->depth-1) as $i) {
                $prefix .= '-';
            }
        } else {
            $prefix = '';
        }

        return "{$prefix} {$this->name}";
    }

    /* N:M */
    public function series()
    {
        return $this->belongsToMany('App\Product\Series');
    }
}
