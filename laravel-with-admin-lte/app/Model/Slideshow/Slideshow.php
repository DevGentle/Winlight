<?php

namespace App\Model\Slideshow;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model implements SlideshowInterface
{
    protected $fillable = [
        'title', 'sub_title', 'photo_id'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
