<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OrderItem;
class Order extends Model
{
    protected $fillable = ['order_id', 'parent_order_id', 'user_id', 'company_id', 'company', 'firstname', 'lastname', 'email', 'phone', 'status', 'ip_address',  'total', 'subtotal', 'discount', 'subtotal_discount', 'need_shipping', 'shipping_cost', 'tax_exempt', 'tax_subtotal', 'timestamp', 'payment_id', 'profile_id', 'localization_id', 'storefront_id', 'secondary_currency', 'b_country_descr', 's_country_descr', 'b_address', 'b_country', 'update_status'];

	public function order_items(){
    	return $this->hasMany(OrderItem::class);
    }
}


