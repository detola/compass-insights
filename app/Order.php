<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
            'user_id',
            'billing_email',
            'billing_company',
            'billing_name',
            'billing_address',
            'billing_city',
            'billing_state',
            'billing_postalcode',
            'billing_phone',
            'billing_discount',
            'billing_subtotal',
            'billing_tax',
            'billing_total',
            'payment_gateway',
            'shipped',
            'error'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
