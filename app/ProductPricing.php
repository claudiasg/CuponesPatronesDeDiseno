<?php

namespace Cupones;

use Illuminate\Database\Eloquent\Model;

class ProductPricing extends Model
{
    protected $table = 'product_pricings';

    protected $fillable = [
    	'product_id',
		'base_price',
		'create_date',
		'expiry_date',
		'in_active',
    ];

    public function Product()
    {
    	return $this->belongsTo('Cupones\Product');
    }
}
