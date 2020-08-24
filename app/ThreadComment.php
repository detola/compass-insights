<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreadComment extends Model
{
    //

    //public function thread()
    //{
    //    return $this->belongsTo(Thread::class);
    //}
    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function threadComments()
    {
        return $this->morphMany(ThreadComment::class, 'commentable');
    }
}
