<?php

namespace App\Model\Photo;

use Illuminate\Database\Eloquent\Model;

class PhotoReference extends Model
{
    protected $fillable = [
        'reference_id', 'file'
    ];
}
