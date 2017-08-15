<?php

namespace App\Model\Promotion;

use Illuminate\Database\Eloquent\Model;
use App\Model\URLify;

class Promotion extends Model
{
    protected $fillable = [
        'title', 'description', 'product_id', 'offer_price', 'start_time', 'end_time', 'cover'
    ];

    public function product()
    {
        return $this->belongsTo('App\Model\Product\Product');
    }

    public function getSlug()
    {
        return URLify::slug($this->attributes['title']);
    }
}
