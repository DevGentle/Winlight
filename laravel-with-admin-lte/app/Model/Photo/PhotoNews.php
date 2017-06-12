<?php

namespace App\Model\Photo;

use Illuminate\Database\Eloquent\Model;

class PhotoNews extends Model
{
    protected $fillable = [
        'news_id', 'file'
    ];

    public function news()
    {
        return $this->belongsTo('App\Model\Paper\News', 'news_id');
    }
}
