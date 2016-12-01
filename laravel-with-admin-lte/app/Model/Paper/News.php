<?php

namespace App\Model\Paper;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'news_category_id', 'title', 'sub_title', 'content', 'photo_id', 'link'
    ];

    public function newsCategory()
    {
        return $this->belongsTo('App\Model\Paper\NewsCategory', 'news_category_id');
    }

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
