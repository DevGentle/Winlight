<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'photo_id'
    ];

    public function productSubCategories()
    {
        return $this->belongsTo('App\Model\Product\Product');
    }
}
