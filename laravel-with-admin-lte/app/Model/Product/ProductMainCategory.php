<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class ProductMainCategory extends Model implements ProductMainCategoryInterface
{
    protected $fillable = [
        'title', 'photo_id'
    ];

    public function productSubCategories()
    {
        return $this->hasMany('App\Model\Product\ProductSubCategory', 'category_main_id');
    }

    public function products()
    {
        return $this->hasMany('App\Model\Product\Product', 'category_main_id');
    }

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
