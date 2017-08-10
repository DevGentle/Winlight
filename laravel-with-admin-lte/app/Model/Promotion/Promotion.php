<?php

namespace App\Model\Promotion;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
        'title', 'description', 'product_id', 'offer_price', 'start_time', 'end_time', 'cover'
    ];

    public function product()
    {
        return $this->belongsTo('App\Model\Product\Product');
    }
}
