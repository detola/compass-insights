<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	use Sluggable;
    use SluggableScopeHelpers;
    // POSTS Category
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
