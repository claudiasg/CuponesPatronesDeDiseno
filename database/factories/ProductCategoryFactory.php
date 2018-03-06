<?php

use Faker\Generator as Faker;

$factory->define(Cupones\ProductCategory::class, function (Faker $faker) {
    return [
        'category_name'=>$faker->randomElement(['Damas','Varones','Nin@s']), 
    	'max_reward_points_encash'=>rand(1,10),
        'parent_category_id'=>rand(1,10),
    ];
});
