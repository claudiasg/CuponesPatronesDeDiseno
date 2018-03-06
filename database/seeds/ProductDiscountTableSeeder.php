<?php

use Illuminate\Database\Seeder;

class ProductDiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cupones\ProductDiscount::class, 20)->create();
    }
}
