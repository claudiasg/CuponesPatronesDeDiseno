<?php

use Faker\Generator as Faker;

$factory->define(Cupones\ProductCategoryDiscount::class, function (Faker $faker) {
    $productoCat=Cupones\ProductCategory::get()->pluck('id')->toarray();
    return [
        'product_category_id'=>$faker->randomElement($productoCat),
    	'discount_value'=>rand(80,170),
    	'discount_unit'=>$faker->randomElement(['Bs','$','%']),
    	'create_date'=>$faker->dateTimeBetween($startDate = '-30 days', $endDate = '+30 days'),
    	'valid_from'=>$faker->dateTimeBetween($startDate = '-15 days', $endDate = '+15 days'),
    	'valid_until'=>$faker->dateTimeBetween($startDate = '-30 days', $endDate = '+30 days'),
    	'coupon_code'=>$faker->word,
    	'minimum_order_value'=>rand(500,650), 
		'maximum_discount_amount'=>rand(3,5),
		'is_redeem_allowed'=>$faker->randomElement(['S','N']),
    ];
});
