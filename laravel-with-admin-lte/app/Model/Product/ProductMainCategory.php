<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class ProductMainCategory extends Model
{
    protected $fillable = [
        'name', 'image'
    ];

    public function productSubCategories()
    {
        return $this->hasMany('App\Model\ProductSubCategory');
    }
}
