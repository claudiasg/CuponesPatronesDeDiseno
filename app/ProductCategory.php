<?php

namespace Cupones;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_categories';

    protected $fillable = [
    	'category_name', 
    	'max_reward_points_encash',
    	'parent_category_id',
    ];

    public function Products()
    {
    	return $this->hasMany('Cupones\Products');
    }

    public function ProductCategoryDiscounts()
    {
    	return $this->hasMany('Cupones\ProductCategoryDiscount');
    }
}
