<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TellCompass extends Model
{
    protected $fillable = [
        'name',
        'email',
        'brand',
        'socialmedia',
        'message'
    ];
}
