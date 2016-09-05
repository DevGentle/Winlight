<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    protected $fillable = [
        'category_main_id', 'title', 'photo_id'
    ];

    public function productMainCategories()
    {
        return $this->belongsTo('App\Model\Product\ProductMainCategory');
    }

    public function products()
    {
        return $this->hasMany('App\Model\Product\Product');
    }

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
