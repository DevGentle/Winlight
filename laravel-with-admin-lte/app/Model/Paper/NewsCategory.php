<?php

namespace App\Model\Paper;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillable = [
        'title', 'sub_title', 'photo_id'
    ];

    public function news()
    {
        return $this->hasMany('App\Model\Paper\News', 'news_category_id');
    }
    
    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
