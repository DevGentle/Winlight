<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class ProductMainCategory extends Model
{
    protected $fillable = [
        'title', 'photo_id'
    ];

    public function productSubCategories()
    {
        return $this->hasMany('App\Model\Product\ProductSubCategory');
    }

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
