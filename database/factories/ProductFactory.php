<?php

use Faker\Generator as Faker;

$factory->define(Cupones\Product::class, function (Faker $faker) {
    $prodCat = Cupones\ProductCategory::get()->pluck('id')->toarray();	
    return [
        'product_name'=>$faker->randomElement(['botines','sandalias','pantuflas','botas']),
    	'product_description'=>$faker->text,
    	'units_in_stock'=>rand(1,35),
    	'product_category_id'=> $faker->randomElement( $prodCat),
    	'reward_points_credit'=> rand(1,10),
    ];
});