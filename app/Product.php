<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = [
        'name',
        'description',
        'details',
        'discount',
        'original_price',
        'product_of_the_month',
        'price',
        'category_id'
    ];

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function presentPrice()
    {
        return 'NGN'.number_format($this->price, 2);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
