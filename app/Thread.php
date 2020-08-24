<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Thread extends Model
{
    //
    //protected $guarded = [];
    protected $fillable = ['subject','type','user_id','thread'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //public function threadComments()
    //{
    //    return $this->hasMany(ThreadComment::class);
    //}
    public function threadComments()
    {
        return $this->morphMany(ThreadComment::class, 'commentable');
    }

}
