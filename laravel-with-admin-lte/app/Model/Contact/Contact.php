<?php

namespace App\Model\Contact;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'title', 'address', 'email', 'phone_number', 'fax_number', 'link'
    ];
}
