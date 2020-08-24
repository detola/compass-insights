<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //Post Image
    protected $upload = '/images/';


    protected $fillable = ['path', 'size'];

    public function user()
    {

    }

    public function getPathAttribute($photo)
    {

        return $this->upload . $photo;
    }
}
