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

    public function productSubCategories()
    {
        return $this->hasMany('App\Model\Product\ProductSubCategory');
    }

    public function products()
    {
        return $this->hasMany('App\Model\Product\Product');
    }
}
