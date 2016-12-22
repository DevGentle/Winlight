<?php

namespace App\Model\Contact;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'email', 'subject', 'phone_number', 'description'
    ];
}
