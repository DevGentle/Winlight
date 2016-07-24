<?php

namespace App\Model\ContactUs;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'title', 'address', 'email', 'phone_number', 'fax_number', 'link'
    ];
}
