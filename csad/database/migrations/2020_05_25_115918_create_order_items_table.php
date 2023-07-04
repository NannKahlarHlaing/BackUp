<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->string('item_id');
            $table->integer('product_id');
            $table->string('product_code');
            $table->string('product');  
            $table->string('product_status');
            $table->integer('orderitem_company_id');
            $table->float('orderitem_price');
            $table->integer('orderitem_base_price');
            $table->integer('orderitem_original_price');
            $table->integer('orderitem_amount');
            $table->integer('orderitem_discount');
            $table->string('orderitem_cart_id');
            $table->integer('orderitem_tax_value');
            $table->integer('orderitem_subtotal');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
