<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function products()
    {

        return $this->hasManyThrough('App\Model\Product\Product', 'App\User');

    }
}
