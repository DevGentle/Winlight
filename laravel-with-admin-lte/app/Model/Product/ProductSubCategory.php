<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    protected $fillable = [
        'title', 'image'
    ];

    public function productMainCategories()
    {
        return $this->belongsTo('App\Model\Product\ProductMainCategory');
    }

    public function products()
    {
        return $this->hasMany('App\Model\Product\Product');
    }
}
