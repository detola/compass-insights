<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //// POSTS Caomment
    protected $fillable = [

        'post_id',
        'photo_id',
        'is_active',
        'author',
        'email',
        'body'
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }


    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
