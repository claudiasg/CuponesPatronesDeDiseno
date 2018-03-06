<?php

use Faker\Generator as Faker;

$factory->define(Cupones\ProductDiscount::class, function (Faker $faker) {
    $producto=Cupones\Product::get()->pluck('id')->toarray();	
    return [
        'product_id'=>$faker->randomElement($producto),
		'discount_value'=>rand(5,15),
		'discount_unit'=>$faker->randomElement(['Bs','$','%']),
		'create_date'=>$faker->dateTimeBetween($startDate = '-30 days', $endDate = '+30 days'),
		'valid_from'=>$faker->dateTimeBetween($startDate = '-30 days', $endDate = '+30 days'),
		'valid_until'=>$faker->dateTimeBetween($startDate = '-30 days', $endDate = '+30 days'),
		'coupon_code'=>$faker->text,
		'minimum_order_value'=>rand(120,250),
		'maximum_discount_amount'=>rand(3,15),
		'is_redeem_allowed'=>$faker->randomElement(['S','N']),
    ];
});