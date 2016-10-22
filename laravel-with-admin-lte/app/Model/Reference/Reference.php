<?php

namespace App\Model\Reference;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $fillable = [
        'title', 'content', 'photo_id', 'link'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
