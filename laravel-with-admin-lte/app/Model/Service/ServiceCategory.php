<?php

namespace App\Model\Service;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = [
        'title', 'image_id'
    ];
}
