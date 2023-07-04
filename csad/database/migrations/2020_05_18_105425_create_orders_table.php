<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('parent_order_id');
            $table->string('user_id');
            $table->integer('company_id');
            $table->string('company');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('status');
            $table->string('ip_address');
            $table->float('total');
            $table->integer('subtotal');
            $table->integer('discount');
            $table->integer('subtotal_discount');
            $table->string('need_shipping');
            // $table->integer('shipping_ids');
            $table->float('shipping_cost');
            $table->string('tax_exempt');
            $table->integer('tax_subtotal');
            $table->string('timestamp');
            $table->integer('payment_id');
            $table->integer('profile_id');
            $table->integer('localization_id');
            $table->integer('storefront_id');
            $table->string('secondary_currency');
            $table->string('b_country_descr');
            $table->string('s_country_descr');
            $table->string('b_address');
            $table->string('b_country');
            $table->integer('update_status');
            $table->timestamps();
            // $table->foreign('product_id')->references('id')->on('order_items');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
