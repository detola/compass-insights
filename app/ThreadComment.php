<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreadComment extends Model
{
    //
    protected $fillable = [
        'user_id',
        'commentable_id',
        'commentable_type',
        'body',
    ];

    //public function thread()
    //{
    //    return $this->belongsTo(Thread::class);
    //}
    public function commentable()
    {
        return $this->morphTo();
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class);
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
