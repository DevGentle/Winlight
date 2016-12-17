<?php

namespace App\Model\Download;

use Illuminate\Database\Eloquent\Model;

class ProductCatalogs extends Model
{
    protected $fillable = [
        'title', 'description', 'file', 'photo_id'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Model\Photo\Photo');
    }
}
