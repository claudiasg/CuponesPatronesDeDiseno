<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoryDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_category_discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_category_id')->unsigned();
            $table->float('discount_value', 8, 2);
            $table->string('discount_unit', 20);
            $table->timestamp('create_date');
            $table->timestamp('valid_from');
            $table->timestamp('valid_until');
            $table->string('coupon_code', 10);
            $table->integer('minimum_order_value');
            $table->integer('maximum_discount_amount');
            $table->string('is_redeem_allowed', 1);
            $table->timestamps();
            $table->foreign('product_category_id')->references('id')->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_category_discounts');
    }
}
