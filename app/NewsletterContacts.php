<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsletterContacts extends Model
{
    protected $fillable = [
        'name',
        'industry',
        'email'
    ];
}
