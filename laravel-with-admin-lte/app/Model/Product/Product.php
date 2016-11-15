<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_main_id', 'category_sub_id', 'code', 'title', 'description', 'photo_id'
    ];

    public function productMainCategories()
    {
        return $this->belongsTo('App\Model\Product\ProductMainCategory', 'category_main_id');
    }

    public function productSubCategories()
    {
        return $this->belongsTo('App\Model\Product\ProductSubCategory', 'category_sub_id');
    }

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
