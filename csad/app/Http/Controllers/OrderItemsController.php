<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderItem;
// error_reporting (E_ALL ^ E_NOTICE); 
class OrderItemscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://cscart.convergencedev.com/api/products",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Basic c3Vtcml0QGNvbnZlcmdlbmNlLmNvLnRoOmJqSE1kNDk4TjcwamxOQzc2bFkwUXM2MG9KOE0xNHRo"
        ),
      ));

        $response = curl_exec($curl);

        curl_close($curl);
        $array = json_decode($response);
        
        $array1 = (array) $array;
        $array2 = (array) $array1['products'];
        foreach ($array2 as $product) {
                $product_code = $product->product_code;

                $status = $product->status;
            
                $company_id = $product->company_id;
         
                $list_price = $product->list_price;
          
                $amount = $product->amount;
            
                $free_shipping = $product->free_shipping;
            
                $out_of_stock_actions = $product->out_of_stock_actions;
            
                $min_qty = $product->min_qty;
          
                $max_qty = $product->max_qty;
           
            
                $tax_ids = $product->tax_ids;
            
            
                $main_category = $product->main_category;
            
                $base_price = $product->base_price;
                    
                $product_id = $product->product_id;
            
                $product = $product->product;

            OrderItem::create([
                'product_id' => $product_id,
                'product' => $product,
                'product_code' => $product_code,
                'status' => $status,
                'company_id' => $company_id,
                'list_price' => $list_price,
                'amount' => $amount,
                'free_shipping' => $free_shipping,
                'out_of_stock_actions' => $out_of_stock_actions,
                'min_qty' => $min_qty,
                'max_qty' => $max_qty,
                'tax_ids' => $tax_ids,
                'main_category' => $main_category,
                'base_price' => $base_price,
               
            ]);
        }
        return view('hi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
