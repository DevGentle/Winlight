<?php

namespace App\Model\Service;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'service_category_id', 'content', 'image'
    ];
}
