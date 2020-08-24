<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
	use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = ['name'];

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
