<?php

namespace App\Model\Service;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_category_id', 'title', 'content', 'image_id'
    ];
}
