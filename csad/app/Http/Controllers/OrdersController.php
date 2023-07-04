<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\LatestOrder;
use App\OrderItem;
use App\ActivityLogs;
use App\Template;
use App\Mapping;
use App\Adam;
use Illuminate\Support\Facades\DB;
error_reporting (E_ALL ^ E_NOTICE); 
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orders = Order::all();
      $order_items = OrderItem::all();

      return view('orders', compact('orders', 'order_items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $uri = $request->path();
      if($uri == 'getorder'){
        $activity = 'Click Fetch From CS-Cart button';
      }
      $client_ip = $_SERVER['REMOTE_ADDR'];

      
      ActivityLogs::create([
        'activities' => $activity,
        'client_ip' => $client_ip,
      ]); 



      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://demo02.convergencedev.com/api/orders",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Basic c3Vtcml0QGNvbnZlcmdlbmNlLmNvLnRoOjRIMTMyMlc0NzY4NjQ0Nnk4MVYwd1h3NzZOOGIxZzA0"
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);

      $array = json_decode($response);

      $array1 = (array) $array;

      $array2 = (array) $array1['orders'];

      $max = LatestOrder::max('order_id');
      if(is_null($max)){
        $max = 0;
      }
      
      if(is_array($array2)){

        foreach($array2 as $order)
        {
          
          
                  $curl = curl_init();

                  curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://demo02.convergencedev.com/api/orders/" . $order->order_id,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                      "Authorization: Basic c3Vtcml0QGNvbnZlcmdlbmNlLmNvLnRoOjRIMTMyMlc0NzY4NjQ0Nnk4MVYwd1h3NzZOOGIxZzA0"
                    ),
                  ));

                  $response1 = curl_exec($curl);

                  curl_close($curl);
                  
                  $items = json_decode($response1);
                  
                  $order_items = (array) $items->products;
          
                foreach ($order_items as $order_item) {
                 
                  $item_id = $order_item->item_id;
                  $product_id = $order_item->product_id;
                  $product_code = $order_item->product_code;
                  $product = $order_item->product;
                  $product_status = $order_item->product_status;
                  $company_id = $order_item->company_id;
                  $price = $order_item->price;
                  $base_price = $order_item->base_price;
                  $original_price = $order_item->original_price;
                  $amount = $order_item->amount;
                  $discount = $order_item->discount;
                  $cart_id = $order_item->cart_id;
                  $tax_value = $order_item->tax_value;
                  $subtotal  = $order_item->subtotal;

                  $order_datas = Order::select('*')
                  ->where([
                    ['order_id', '=', $order->order_id],
                  ])->get();
                  foreach ($order_datas as $order_data) {
                    $orderid = $order_data->order_id;
                  }
                  if(is_null($max)){
                    $orderid  = 0;
                  }
                  if($order->order_id > $orderid)
                  {
                    OrderItem::create([
                      'order_id' => $order->order_id,
                      'item_id' => $item_id,
                      'product_id' => $product_id,
                      'product_code' => $product_code,
                      'product' => $product,
                      'product_status' => $product_status,
                      'orderitem_company_id' => $company_id,
                      'orderitem_price' => $price,
                      'orderitem_base_price' => $base_price,
                      'orderitem_original_price' => $original_price,
                      'orderitem_amount' => $amount,
                      'orderitem_discount' => $discount,
                      'orderitem_cart_id' => $cart_id,
                      'orderitem_tax_value' => $tax_value,
                      'orderitem_subtotal' => $subtotal,
                    ]);
                  }//endif
                } //orderitems

          $zip = $items->s_zipcode;
          // echo $zip;
          $zip_ar = explode(',', $zip);
          // dd($zip_ar[0]);
          if($zip_ar[0] == ""){
            $user_id = 'default';
            $need_shipping = 'default';
          }else{
            // echo $zip_ar[0];
            $user_id = $zip_ar[1];
            $need_shipping = $zip_ar[2];
          }
          
          $order_id = $items->order_id;
          $parent_order_id = $items->parent_order_id;
          
          $company_id = $items->company_id;
          $company = $items->company;
          $firstname = $items->firstname;
          $lastname = $items->lastname;
          $email = $items->email;
          $phone = $items->phone;
          $status = $items->status;
          $ip_address = $items->ip_address;
          $total = $items->total;
          $subtotal = $items->subtotal;
          $discount = $items->discount;
          $subtotal_discount = $items->subtotal_discount;
          // $need_shipping = $items->need_shipping;
          $shipping_cost = $items->shipping_cost;
          $tax_exempt = $items->tax_exempt;
          $tax_subtotal = $items->tax_subtotal;
          $timestamp = $items->timestamp;
          $payment_id = $items->payment_id;
          $profile_id = $items->profile_id;
          $localization_id = $items->localization_id;
          // $storefront_id = $items->storefront_id;
          $storefront_id = 0;
          $secondary_currency = $items->secondary_currency;
          $b_country_descr = $items->b_country_descr;
          $s_country_descr = $items->s_country_descr;
          $b_address = $items->b_address;
          $b_country = $items->b_country;           
           // dd($discount);
           // die();
          // if($order_id > $max){
                    $ids = Order::select('*')
                          ->where([
                              ['order_id', '=', $order->order_id],
                          ])->get();
                          foreach ($ids as $id) {
                            $data_id = $id->order_id;
                          }
                  if(is_null($id)){
                      Order::create([
                        'order_id' => $order_id,  
                        'parent_order_id' => $parent_order_id,
                        'user_id' => $user_id, 
                        'company_id' => $company_id, 
                        'company' => $company,  
                        'firstname' => $firstname, 
                        'lastname' => $lastname, 
                        'email' => $email, 
                        'phone' => $phone, 
                        'status' => $status,
                        'ip_address' => $ip_address,
                        'total' => $total,
                        'subtotal' => $subtotal,
                        'discount' => $discount,
                        'subtotal_discount' => $subtotal_discount,
                        'need_shipping' => $need_shipping,
                        'shipping_cost' => $shipping_cost,
                        'tax_exempt' => $tax_exempt,
                        'tax_subtotal' => $tax_subtotal,
                        'timestamp' => $timestamp,
                        'payment_id' => $payment_id,
                        'profile_id' => $profile_id,
                        'localization_id' => $localization_id,
                        'storefront_id' => $storefront_id,
                        'secondary_currency' =>$secondary_currency,
                        'b_country_descr' => $b_country_descr,
                        's_country_descr' => $s_country_descr,
                        'b_address' => $b_address,
                        'b_country' => $b_country,
                        'update_status' => 0,
                      ]);
                    // } ordermax       
                }else{
                  $changes = Order::select('*')
                  ->where([
                      ['order_id', '=', $data_id],
                  ])->get();
                  // echo $data_id;
                  
                  foreach ($changes as $change) {
                    $change->status = $status;
                    // dd($change->status);
                    $change->save();
                  }
                  
                }
      }
        // $maxValue = Order::max('order_id');
        // if($maxValue > $max){
        //   LatestOrder::create([
        //     'order_id' => $maxValue
        //   ]);
        // }
      }
      
      return redirect('/orders');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function edit($id)
      {
        //
      }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function update(Request $request, $id)
      {
        //
      }

      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
      {
        //
      }
    }
