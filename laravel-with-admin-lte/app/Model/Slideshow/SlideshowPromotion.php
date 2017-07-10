<?php

namespace App\Model\Slideshow;

use Illuminate\Database\Eloquent\Model;

class SlideshowPromotion extends Model implements SlideshowPromotionInterface
{
    protected $fillable = [
        'title', 'sub_title', 'link', 'photo_id'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
