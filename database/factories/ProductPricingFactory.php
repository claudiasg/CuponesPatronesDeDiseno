<?php

use Faker\Generator as Faker;

$factory->define(Cupones\ProductPricing::class, function (Faker $faker) {
    $producto = Cupones\Product::get()->pluck('id')->toarray();	
    return [                        
        'product_id'=> $faker->randomElement( $producto),       
        'base_price'=>rand(100,450),
		'create_date'=>$faker->dateTimeBetween($startDate = '-30 days', $endDate = '+30 days'),
		'expiry_date'=>$faker->dateTimeBetween($startDate = '-30 days', $endDate = '+30 days'),
        'in_active'=>$faker->randomElement(['S','N']),       
    ];
});

