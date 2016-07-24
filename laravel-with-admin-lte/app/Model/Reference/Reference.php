<?php

namespace App\Model\Reference;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $fillable = [
        '$title', 'content', 'image', 'link'
    ];
}
