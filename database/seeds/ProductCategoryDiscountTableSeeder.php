<?php

use Illuminate\Database\Seeder;

class ProductCategoryDiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cupones\ProductCategoryDiscount::class, 20)->create();
    }
}
