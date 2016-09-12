<?php

namespace App\Model\Slideshow;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    protected $fillable = [
        'title', 'sub_title', 'image_id'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
