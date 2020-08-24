<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //USER Role
    protected $fillable = ['name'];
    //
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
