<?php

namespace App\Model\Product;

use App\Model\URLify;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_main_id', 'code', 'title', 'description', 'file', 'photo_id'
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

    public function getSlug()
    {
        return URLify::slug($this->attributes['title']);
    }
}
