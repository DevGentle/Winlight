<?php

namespace App\Model\Photo;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['file'];

    public function productMainCategories()
    {
        return $this->hasMany('App\Model\Product\ProductMainCategory');
    }
}
