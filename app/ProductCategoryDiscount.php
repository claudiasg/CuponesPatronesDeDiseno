<?php

namespace Cupones;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryDiscount extends Model
{
    protected $table = 'product_category_discounts';

    protected $fillable = [
    	'product_category_id',
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

    public function ProductCategory()
    {
        return $this->belongsTo('Cupones\ProductCategory');
    }
}
