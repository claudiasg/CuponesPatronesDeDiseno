<?php

namespace Cupones;

use Illuminate\Database\Eloquent\Model;

class ProductDiscount extends Model
{
    protected $table = 'product_discounts';

    protected $fillable = [
		'product_id',
		'discount_value',
		'discount_unit',
		'create_date',
		'valid_from',
		'valid_until',
		'coupon_code',
		'minimum_order_value',
		'maximum_discount_amount',
		'is_redeem_allowed',
    ];

    public function Product()
    {
    	return $this->belongsTo('Cupones\Product');
    }
}
