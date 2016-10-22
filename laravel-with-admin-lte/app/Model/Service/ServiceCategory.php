<?php

namespace App\Model\Service;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = [
        'title', 'photo_id'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
