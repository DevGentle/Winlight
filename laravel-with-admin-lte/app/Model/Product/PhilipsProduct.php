<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class PhilipsProduct extends Model
{
    protected $fillable = [
        'code', 'title', 'description', 'price', 'photo_id'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
