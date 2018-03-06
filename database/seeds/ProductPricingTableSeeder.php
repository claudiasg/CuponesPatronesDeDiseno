<?php

use Illuminate\Database\Seeder;

class ProductPricingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cupones\ProductPricing::class, 25)->create();
    }
}
