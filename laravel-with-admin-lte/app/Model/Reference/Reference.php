<?php

namespace App\Model\Reference;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $fillable = [
        'title', 'content', 'cover', 'link'
    ];

    public function photos()
    {
        return $this->hasMany('App\Model\Photo\PhotoReference');
    }
}
