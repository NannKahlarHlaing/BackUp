<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id','item_id','product_id', 'product_code', 'product', 'product_status', 'orderitem_company_id', 'orderitem_price', 'orderitem_base_price','orderitem_original_price', 'orderitem_amount', 'orderitem_discount', 'orderitem_cart_id', 'orderitem_tax_value','orderitem_subtotal'];

    public function order(){
		return $this->belongsTo(Order::class);
	}
    
}
