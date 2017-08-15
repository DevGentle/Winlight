<?php

namespace App\Model\Paper;

use App\Model\URLify;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'news_category_id', 'title', 'sub_title', 'content', 'link', 'cover'
    ];

    public function newsCategory()
    {
        return $this->belongsTo('App\Model\Paper\NewsCategory', 'news_category_id');
    }

    public function photos()
    {
        return $this->hasMany('App\Model\Photo\PhotoNews', 'news_id');
    }

    public function getSlug()
    {
        return URLify::slug($this->attributes['title']);
    }
}
