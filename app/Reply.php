<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //Comments Reply
    protected $fillable = [

        'comment_id',
        'photo_id',
        'is_active',
        'author',
        'email',
        'body'
    ];

    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
