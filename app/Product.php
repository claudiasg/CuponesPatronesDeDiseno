<?php

namespace Cupones;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
    	'product_name',
    	'product_description',
    	'units_in_stock',
    	'product_category_id',
    	'reward_points_credit',
    ];

    public function ProductPricings()
    {
    	return $this->hasMany('Cupones\ProductPricing');
    }

    public function ProductDiscounts()
    {
    	return $this->hasMany('Cupones\ProductDiscount');
    }

    public function ProductCategory()
    {
    	return $this->belongsTo('Cupones\ProductCategory');
    }
  /* public __constructor($nombre,$descripcion,$stock,$idcar,$reward)
   {
       $this->product_name=$nombre;
   }*/
}
