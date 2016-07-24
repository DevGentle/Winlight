<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    protected $fillable = [
        'name', 'image'
    ];

    public function productMainCategories()
    {
        return $this->belongsTo('App\Model\ProductMainCategory');
    }

    public function products()
    {
        return $this->hasMany('App\Model\Products');
    }
}
