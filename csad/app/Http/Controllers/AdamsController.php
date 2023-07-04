<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\LatestOrder;
use App\OrderItem;
use App\ActivityLogs;
use App\Template;
use App\Mapping;


error_reporting (E_ALL ^ E_NOTICE); 
class AdamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request)
    {
        $uri = $request->path();
        if($uri == 'sendorder'){
            $activity = 'Click Send To Adam button';
        }
        $client_ip = $_SERVER['REMOTE_ADDR'];


        ActivityLogs::create([
            'activities' => $activity,
            'client_ip' => $client_ip,
        ]); 

        $templates = Template::select('*')
        ->where([
            ['active_status', '=', 1],
        ])->get();

        foreach ($templates as $template) {
            $id = $template->id;
        }

            $field1s = Mapping::select('*')
              ->where([
                ['row_id', '=', 1],
                ['template_id', '=', $id],
              ])->get();
              foreach ($field1s as $field1) {
               $cscart1 = $field1->cscart_fields;
               $adam1 = $field1->adams_fields;          
               $default1 = $field1->default; 
             }

             $field2s = Mapping::select('*')
             ->where([
              ['row_id', '=', 2],
              ['template_id', '=', $id],
            ])->get();
             foreach ($field2s as $field2) {
               $cscart2 = $field2->cscart_fields;
               $adam2 = $field2->adams_fields;          
               $default2 = $field2->default; 
             }

             $field3s = Mapping::select('*')
             ->where([
              ['row_id', '=', 3],
              ['template_id', '=', $id],
            ])->get();
             foreach ($field3s as $field3) {
               $cscart3 = $field3->cscart_fields;
               $adam3 = $field3->adams_fields;          
               $default3 = $field3->default; 
             }
         
                 $field4s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 4],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field4s as $field4) {
                   $cscart4 = $field4->cscart_fields;
                   $adam4 = $field4->adams_fields;          
                   $default4 = $field4->default; 
                 }

                 $field5s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 5],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field5s as $field5) {
                   $cscart5 = $field5->cscart_fields;
                   $adam5 = $field5->adams_fields;          
                   $default5 = $field5->default; 
                 }

                 $field6s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 6],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field6s as $field6) {
                   $cscart6 = $field6->cscart_fields;
                   $adam6 = $field6->adams_fields;          
                   $default6 = $field6->default; 
                 }

                 $field7s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 7],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field7s as $field7) {
                   $cscart7 = $field7->cscart_fields;
                   $adam7 = $field7->adams_fields;          
                   $default7 = $field7->default; 
                 }

                 $field8s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 8],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field8s as $field8) {
                   $cscart8 = $field8->cscart_fields;
                   $adam8 = $field8->adams_fields;          
                   $default8 = $field8->default; 
                 }

                 $field9s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 9],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field9s as $field9) {
                   $cscart9 = $field9->cscart_fields;
                   $adam9 = $field9->adams_fields;          
                   $default9 = $field9->default; 
                 }

                 $field10s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 10],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field10s as $field10) {
                   $cscart10 = $field10->cscart_fields;
                   $adam10 = $field10->adams_fields;          
                   $default10 = $field10->default; 
                 }
                 
                 $field11s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 11],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field11s as $field11) {
                   $cscart11 = $field11->cscart_fields;
                   $adam11 = $field11->adams_fields;          
                   $default11 = $field11->default; 
                 }

                 $field12s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 12],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field12s as $field12) {
                   $cscart12 = $field12->cscart_fields;
                   $adam12 = $field12->adams_fields;          
                   $default12 = $field12->default; 
                 }

                 $field13s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 13],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field13s as $field13) {
                   $cscart13 = $field13->cscart_fields;
                   $adam13 = $field13->adams_fields;          
                   $default13 = $field13->default; 
                 }

                 $field14s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 14],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field14s as $field14) {
                   $cscart14 = $field14->cscart_fields;
                   $adam14 = $field14->adams_fields;          
                   $default14 = $field14->default; 
                 }

                 $field15s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 15],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field15s as $field15) {
                   $cscart15 = $field15->cscart_fields;
                   $adam15 = $field15->adams_fields;          
                   $default15 = $field15->default; 
                 }

                 $field16s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 16],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field16s as $field16) {
                   $cscart16 = $field16->cscart_fields;
                   $adam16 = $field16->adams_fields;          
                   $default16 = $field16->default; 
                 }

                 $field17s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 17],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field17s as $field17) {
                   $cscart17 = $field17->cscart_fields;
                   $adam17 = $field17->adams_fields;          
                   $default17 = $field17->default; 
                 }

                 $field18s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 18],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field18s as $field18) {
                   $cscart18 = $field18->cscart_fields;
                   $adam18 = $field18->adams_fields;          
                   $default18 = $field18->default; 
                 }

                 $field19s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 19],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field19s as $field19) {
                   $cscart19 = $field19->cscart_fields;
                   $adam19 = $field19->adams_fields;          
                   $default19 = $field19->default; 
                 }

                 $field20s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 20],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field20s as $field20) {
                   $cscart20 = $field20->cscart_fields;
                   $adam20 = $field20->adams_fields;          
                   $default20 = $field20->default; 
                 }

                 $field21s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 21],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field21s as $field21) {
                   $cscart21 = $field21->cscart_fields;
                   $adam21 = $field21->adams_fields;          
                   $default21 = $field21->default; 
                 }

                 $field22s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 22],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field22s as $field22) {
                   $cscart22 = $field22->cscart_fields;
                   $adam22 = $field22->adams_fields;          
                   $default22 = $field22->default; 
                 }

                 $field23s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 23],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field23s as $field23) {
                   $cscart23 = $field23->cscart_fields;
                   $adam23 = $field23->adams_fields;          
                   $default23 = $field23->default; 
                 }

                 $field24s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 24],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field24s as $field24) {
                   $cscart24 = $field24->cscart_fields;
                   $adam24 = $field24->adams_fields;          
                   $default24 = $field24->default; 
                 }

                 $field25s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 25],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field25s as $field25) {
                   $cscart25 = $field25->cscart_fields;
                   $adam25 = $field25->adams_fields;          
                   $default25 = $field25->default; 
                 }

                 $field26s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 26],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field26s as $field26) {
                   $cscart26 = $field26->cscart_fields;
                   $adam26 = $field26->adams_fields;          
                   $default26 = $field26->default; 
                 }

                 $field27s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 27],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field27s as $field27) {
                   $cscart27 = $field27->cscart_fields;
                   $adam27 = $field27->adams_fields;          
                   $default27 = $field27->default; 
                 }

                 $field28s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 28],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field28s as $field28) {
                   $cscart28 = $field28->cscart_fields;
                   $adam28 = $field28->adams_fields;          
                   $default28 = $field28->default; 
                 }

                 $field29s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 29],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field29s as $field29) {
                   $cscart29 = $field29->cscart_fields;
                   $adam29 = $field29->adams_fields;          
                   $default29 = $field29->default; 
                 }

                 $field30s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 30],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field30s as $field30) {
                   $cscart30 = $field30->cscart_fields;
                   $adam30 = $field30->adams_fields;          
                   $default30 = $field30->default; 
                 }

                 $field31s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 31],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field31s as $field31) {
                   $cscart31 = $field31->cscart_fields;
                   $adam31 = $field31->adams_fields;          
                   $default31 = $field31->default; 
                 }

                 $field32s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 32],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field32s as $field32) {
                   $cscart32 = $field32->cscart_fields;
                   $adam32 = $field32->adams_fields;          
                   $default32 = $field32->default; 
                 }

                 $field33s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 33],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field33s as $field33) {
                   $cscart33 = $field33->cscart_fields;
                   $adam33 = $field33->adams_fields;          
                   $default33 = $field33->default; 
                 }

                 $field34s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 34],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field34s as $field34) {
                   $cscart34 = $field34->cscart_fields;
                   $adam34 = $field34->adams_fields;          
                   $default34 = $field34->default; 
                 }

                 $field35s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 35],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field35s as $field35) {
                   $cscart35 = $field35->cscart_fields;
                   $adam35 = $field35->adams_fields;          
                   $default35 = $field35->default; 
                 }

                 $field36s = Mapping::select('*')
                 ->where([
                  ['row_id', '=', 36],
                  ['template_id', '=', $id],
                ])->get();
                 foreach ($field36s as $field36) {
                   $cscart36 = $field36->cscart_fields;
                   $adam36 = $field36->adams_fields;          
                   $default36 = $field36->default; 
                 }
        
                 $orders = Order::select('*')
                 ->where([
                     ['status', '=', 'C'],
                     ['update_status', '=', 0],
                 ])->get();
        foreach ($orders as $order) { //order
                $id = $order->order_id;

                  if($cscart1 == 'cscart'){
                    $adamfield1 = $default1;
                  }else{
                    $adamfield1 = $this->verify_cscart_Order($cscart1 , $id);  
                  }
                if($cscart2 == 'cscart'){
                  $adamfield2 = $default2;
                }else{
                  $adamfield2 = $this->verify_cscart_Order($cscart2 , $id);
                }

                if($cscart3 == 'cscart'){
                  $adamfield3 = $default3;
                }else{
                  $adamfield3 = $this->verify_cscart_Order($cscart3 , $id);
                  if($adamfield3 == 'default'){
                    $adamfield3 = $default3;
                  }
                }
               
                if($cscart4 == 'cscart'){
                  $adamfield4 = $default4;
                }else{
                  $adamfield4 = $this->verify_cscart_Order($cscart4 , $id);
                  if($adamfield4 == 'default'){
                    $adamfield4 = $default4;
                  }
                }

                
                if($cscart5 == 'cscart'){
                  $adamfield5 = $default5;
                }else{
                  $adamfield5 = $this->verify_cscart_Order($cscart5 , $id);
                }

                if($cscart6 == 'cscart'){
                  $adamfield6 = $default6;
                }else{
                  $adamfield6 = $this->verify_cscart_Order($cscart6 , $id);
                }

                if($cscart7 == 'cscart'){
                  $adamfield7 = $default7;
                }else{
                  $adamfield7 = $this->verify_cscart_Order($cscart7 , $id);
                }

                if($cscart8 == 'cscart'){
                  $adamfield8 = $default8;
                }else{
                  $adamfield8 = $this->verify_cscart_Order($cscart8 , $id);
                }

                if($cscart9 == 'cscart'){
                  $adamfield9 = $default9;
                }else{
                  $adamfield9 = $this->verify_cscart_Order($cscart9 , $id);
                }

                if($cscart10 == 'cscart'){
                  $adamfield10 = $default10;
                }else{
                  $adamfield10 = $this->verify_cscart_Order($cscart10 , $id);
                }

                if($cscart11 == 'cscart'){
                  $adamfield11 = $default11;
                }else{
                  $adamfield11 = $this->verify_cscart_Order($cscart11 , $id);
                }

                if($cscart12 == 'cscart'){
                  $adamfield12 = $default12;
                }else{
                  $adamfield12 = $this->verify_cscart_Order($cscart12 , $id);
                }

                if($cscart13 == 'cscart'){
                  $adamfield13 = $default13;
                }else{
                  $adamfield13 = $this->verify_cscart_Order($cscart13 , $id);
                }

                if($cscart14 == 'cscart'){
                  $adamfield14 = $default14;
                }else{
                  $adamfield14 = $this->verify_cscart_Order($cscart14 , $id);
                }

                if($cscart15 == 'cscart'){
                  $adamfield15 = $default15;
                }else{
                  $adamfield15 = $this->verify_cscart_Order($cscart15 , $id);
                }

                if($cscart16 == 'cscart'){
                  $adamfield16 = $default16;
                }else{
                  $adamfield16 = $this->verify_cscart_Order($cscart16, $id);
                }

                if($cscart17 == 'cscart'){
                  $adamfield17 = $default17;
                }else{
                  $adamfield17 = $this->verify_cscart_Order($cscart17 , $id);
                }

                if($cscart18 == 'cscart'){
                  $adamfield18 = $default18;
                }else{
                  $adamfield18 = $this->verify_cscart_Order($cscart18 , $id);
                }

                if($cscart19 == 'cscart'){
                  $adamfield19 = $default19;
                }else{
                  $adamfield19 = $this->verify_cscart_Order($cscart19 , $id);
                }

                if($cscart20 == 'cscart'){
                  $adamfield20 = $default20;
                }else{
                  $adamfield20 = $this->verify_cscart_Order($cscart20 , $id);
                }

                if($cscart21 == 'cscart'){
                  $adamfield21 = $default21;
                }else{
                  $adamfield21 = $this->verify_cscart_Order($cscart21 , $id);
                }

                if($cscart22 == 'cscart'){
                  $adamfield22 = $default22;
                }else{
                  $adamfield22 = $this->verify_cscart_Order($cscart22 , $id);
                }

                if($cscart23 == 'cscart'){
                  $adamfield23 = $default23;
                }else{
                  $adamfield23 = $this->verify_cscart_Order($cscart23 , $id);
                }

                if($cscart24 == 'cscart'){
                  $adamfield24 = $default24;
                }else{
                  $adamfield24 = $this->verify_cscart_Order($cscart24 , $id);
                }

                if($cscart25 == 'cscart'){
                  $adamfield25 = $default25;
                }else{
                  $adamfield25 = $this->verify_cscart_Order($cscart25 , $id);
                }

                if($cscart26 == 'cscart'){
                  $adamfield26 = $default26;
                }else{
                  $adamfield26 = $this->verify_cscart_Order($cscart26 , $id);
                }

                if($cscart27 == 'cscart'){
                  $adamfield27 = $default27;
                }else{
                  $adamfield27 = $this->verify_cscart_Order($cscart27 , $id);
                }

                if($cscart28 == 'cscart'){
                  $adamfield28 = $default28;
                }else{
                  $adamfield28 = $this->verify_cscart_Order($cscart28 , $id);
                }

                if($cscart29 == 'cscart'){
                  $adamfield29 = $default29;
                }else{
                  $adamfield29 = $this->verify_cscart_Order($cscart29 , $id);
                }

                if($cscart30 == 'cscart'){
                  $adamfield30 = $default30;
                }else{
                  $adamfield30 = $this->verify_cscart_Order($cscart30 , $id);
                }

                if($cscart31 == 'cscart'){
                  $adamfield31 = $default31;
                }else{
                  $adamfield31 = $this->verify_cscart_Order($cscart31 , $id);
                }

                if($cscart32 == 'cscart'){
                  $adamfield32 = $default32;
                }else{
                  $adamfield32 = $this->verify_cscart_Order($cscart32 , $id);
                }

                if($cscart33 == 'cscart'){
                  $adamfield33 = $default33;
                }else{
                  $adamfield33 = $this->verify_cscart_Order($cscart33 , $id);
                }

                if($cscart34 == 'cscart'){
                  $adamfield34 = $default34;
                }else{
                  $adamfield34 = $this->verify_cscart_Order($cscart34 , $id);
                }

                if($cscart35 == 'cscart'){
                  $adamfield35 = $default35;
                }else{
                  $adamfield35 = $this->verify_cscart_Order($cscart35 , $id);
                }

                if($cscart36 == 'cscart'){
                  $adamfield36 = $default36;
                }else{
                  $adamfield36 = $this->verify_cscart_Order($cscart36 , $id);
                }
            

                $BranchCode = $adamfield1;
                $CompanyCode = $adamfield2;
                $CustomerCode = $adamfield3;
                $CustomerShipCode = $adamfield4;
                $DeliveryDate = date('Y-m-d');
                $DistributerCode = $adamfield6;
                $InvoiceDate = date('Y-m-d');
                $LineTotal = $adamfield8;
                $RoundingAmount = $adamfield9;
                $SalesInvoiceCode = $adamfield10;
                $SalesOrderCode = $adamfield11;
                $SalesManCode = $adamfield12;
                $Status = $adamfield13;
                $TotalDiscount = $adamfield14;
                $TotalGross = $adamfield15;
                $TotalNet = $adamfield16;
                $TotalTax = $adamfield17;
                $WarehouseCode = $adamfield18;
                $login = $adamfield20;
                $password = $adamfield21;
                $BaseQuantity = $adamfield22;
                $BaseUOM = $adamfield23;
                $ConvRate = $adamfield24;
                $DiscountAmount = $adamfield25;
                $GrossAmount = $adamfield26;
                $ItemCode = $adamfield27;
                $LineNumber = $adamfield28;
                $LineType = $adamfield29;
                $NetAmount = $adamfield30;
                $Quantity = $adamfield31;
                $SupplierCode = $adamfield32;
                $TaxAmount = $adamfield33;
                $Currency = $adamfield34;
                $UOM = $adamfield35;
                $UnitPrice = $adamfield36;

          if($Status == 'C'){
          $Status = 2;
          }
          $TotalNet = $TotalGross - ($TotalDiscount + $TotalTax);
          $GrossAmount = $UnitPrice * $Quantity;  
          $NetAmount = $GrossAmount - ($DiscountAmount + $TaxAmount);
          $GrossAmount1 = (int) round($GrossAmount);
          $NetAmount1 = (int) round($NetAmount);
          $TotalNet1 = (int) round($TotalNet);
          $UnitPrice1 = (int) round($UnitPrice);
        //   echo "DistributerCode is : " . $DisrtributerCode . "<br>";
        //   echo $id;
        //         echo "<br>";
        // echo "BranchCode" . $BranchCode . "<br>";
        //   echo "CompanyCode" . $CompanyCode . "<br>";
        //   echo "CustomerCode" . $CustomerCode . "<br>";
        //   echo "CustomerShipCode" . $CustomerShipCode . "<br>";
        //   echo "DeliveryDate" . $DeliveryDate . "<br>";
        //   echo "DisrtributerCode" . $DisrtributerCode . "<br>";
        //   echo "InvoiceDate" . $InvoiceDate . "<br>";
        //   echo "LineTotal" . $LineTotal ."<br>";
        //   echo "RoundingAmount" . $RoundingAmount . '<br>';
        //   echo "SalesInvoiceCode" . $SalesInvoiceCode . "<br>";
        //   echo "SalesManCode" . $SalesManCode . "<br>";
        //   echo "Status" . $Status . "<br>";
        //   echo "TotalDiscount" . $TotalDiscount . "<br>";
        //   echo "TotalGross". $TotalGross. "<br>";
        //   echo "TotalTax" . $TotalTax . "<br>";
        //    echo "DiscountAmount" . $DiscountAmount . "<br>";
        //    echo "TaxAmount" . $TaxAmount . "<br>";
        //   echo "UnitPrice" . $UnitPrice1 . "<br>";
        //   echo "Quantity" . $Quantity . "<br>";
        //   echo "TotalNet" . $TotalNet . "<br>";
        //   echo "GrossAmount" . $GrossAmount1 . "<br>";
        //   echo "NetAmount" . $NetAmount . "<br>";  
        //   echo "TotalGross" . $TotalGross . "<br>";

          

          $length = strlen($id); 
               $length1 = 7 - $length;
               if($length1 == 0){
                $add = '';
              }elseif($length1 == 1){
                $add = '0';
              }
              elseif($length1 == 2){
                $add = '00';
              }elseif($length1 == 3){
                $add = '000';
              }elseif($length1 == 4){
                $add = '0000';
              }
              elseif($length1 == 5){
                $add = '00000';
              }
              else{
                $add = '000000';
              }

              $value = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ns1=\"http://schemas.datacontract.org/2004/07/WCFServices.Prop\" xmlns:ns2=\"http://tempuri.org/\">\r\n    
              <SOAP-ENV:Body>\r\n        
              <ns2:CreateInvoice>\r\n            
              <ns2:req>\r\n               
              <ns1:BranchCode>" . $BranchCode ."</ns1:BranchCode>\r\n                
              <ns1:CompanyCode>3</ns1:CompanyCode>\r\n                
              <ns1:Currency>" . $Currency ."</ns1:Currency>\r\n                
              <ns1:CustomerCode>" . $CustomerCode ."</ns1:CustomerCode>\r\n                
              <ns1:CustomerShipCode>" . $CustomerShipCode ."</ns1:CustomerShipCode>\r\n       
              <ns1:DeliveryDate>" . $DeliveryDate . "</ns1:DeliveryDate>\r\n                
              <ns1:DistributorCode>" . $DistributerCode . "</ns1:DistributorCode>\r\n         
              <ns1:InvoiceDate>" . $DeliveryDate . "</ns1:InvoiceDate>\r\n                
              <ns1:LineTotal>" . $LineTotal . "</ns1:LineTotal>\r\n               
              <ns1:RoundingAmount>" . $RoundingAmount . "</ns1:RoundingAmount>\r\n            
              <ns1:SalesInvoiceCode>INV". $add . $id. "</ns1:SalesInvoiceCode>\r\n              
              <ns1:SalesOrderCode>INV". $add . $id . "</ns1:SalesOrderCode>\r\n                
              <ns1:SalesmanCode>" . $SalesManCode ."</ns1:SalesmanCode>\r\n                
              <ns1:Status>" . $Status ."</ns1:Status>\r\n                
              <ns1:TotalDiscount>" . $TotalDiscount ."</ns1:TotalDiscount>\r\n                
              <ns1:TotalGross>" . $TotalGross ."</ns1:TotalGross>\r\n                
              <ns1:TotalNet>" . $TotalNet ."</ns1:TotalNet>\r\n                
              <ns1:TotalTax>" . $TotalTax ."</ns1:TotalTax>\r\n                
              <ns1:WarehouseCode>" . $WarehouseCode ."</ns1:WarehouseCode>\r\n                
              <ns1:invoiceDetails>\r\n                   
              <ns1:CreateInvoiceDetails>\r\n                        
              <ns1:BaseQuantity>" . $BaseQuantity ."</ns1:BaseQuantity>\r\n                  
              <ns1:BaseUOM>" . $BaseUOM ."</ns1:BaseUOM>\r\n                        
              <ns1:ConvRate>" . $ConvRate ."</ns1:ConvRate>\r\n                        
              <ns1:DiscountAmount>" . $DiscountAmount ."</ns1:DiscountAmount>\r\n            
              <ns1:GrossAmount>" . $GrossAmount ."</ns1:GrossAmount>\r\n                     
              <ns1:ItemCode>" . $ItemCode ."</ns1:ItemCode>\r\n                        
              <ns1:LineNumber>" . $LineNumber ."</ns1:LineNumber>\r\n                        
              <ns1:LineType>" . $LineType ."</ns1:LineType>\r\n                        
              <ns1:NetAmount>" . $NetAmount ."</ns1:NetAmount>\r\n                        
              <ns1:Quantity>" . $Quantity ."</ns1:Quantity>\r\n                        
              <ns1:SupplierCode>" . $SupplierCode ."</ns1:SupplierCode>\r\n                  
              <ns1:TaxAmount>" . $TaxAmount ."</ns1:TaxAmount>\r\n                        
              <ns1:TaxCode></ns1:TaxCode>\r\n                        
              <ns1:UOM>" . $UOM ."</ns1:UOM>\r\n                        
              <ns1:UnitPrice>" . $UnitPrice ."</ns1:UnitPrice>\r\n                    
              </ns1:CreateInvoiceDetails>\r\n                    
              <ns1:CreateInvoiceDetails>\r\n                        
              <ns1:BaseQuantity>" . $UnitPrice ."</ns1:BaseQuantity>\r\n                  
              <ns1:BaseUOM>" . $BaseUOM ."</ns1:BaseUOM>\r\n                        
              <ns1:ConvRate>" . $ConvRate ."</ns1:ConvRate>\r\n                        
              <ns1:DiscountAmount>" . $DiscountAmount ."</ns1:DiscountAmount>\r\n            
              <ns1:GrossAmount>" . $GrossAmount ."</ns1:GrossAmount>\r\n                     
              <ns1:ItemCode>" . $ItemCode ."</ns1:ItemCode>\r\n                        
              <ns1:LineNumber>200</ns1:LineNumber>\r\n                        
              <ns1:LineType>" . $LineType ."</ns1:LineType>\r\n                        
              <ns1:NetAmount>" . $NetAmount ."</ns1:NetAmount>\r\n                        
              <ns1:Quantity>" . $Quantity ."</ns1:Quantity>\r\n                       
              <ns1:SupplierCode>" . $SupplierCode ."</ns1:SupplierCode>\r\n                
              <ns1:TaxAmount>" . $TaxAmount ."</ns1:TaxAmount>\r\n                        
              <ns1:TaxCode></ns1:TaxCode>\r\n                        
              <ns1:UOM>" . $UOM ."</ns1:UOM>\r\n                        
              <ns1:UnitPrice>" . $UnitPrice ."</ns1:UnitPrice>\r\n                   
              </ns1:CreateInvoiceDetails>\r\n                
              </ns1:invoiceDetails>\r\n                
              <ns1:login>" . $login ."</ns1:login>\r\n                
              <ns1:password>" . $password ."</ns1:password>\r\n           
              </ns2:req>\r\n        
              </ns2:CreateInvoice>\r\n    
              </SOAP-ENV:Body>\r\n</SOAP-ENV:Envelope>\r\n";
              
              // echo $value;
              // die();
              $curl = curl_init();

              curl_setopt_array($curl, array(
                CURLOPT_URL => "http://52.163.250.214:3390/ADAMS_API_WSDL/Service.svc?wsdl",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS =>$value,
                CURLOPT_HTTPHEADER => array(
                  "Content-Type: text/xml",
                  "SOAPAction: http://tempuri.org/IADAMSService/CreateInvoice",
                  "Cache-Control: no-cache",
                  "Cookie: ASP.NET_SessionId=qc5di2r0khhvama5x1inlill"
                ),
              ));

              $response = curl_exec($curl);

              curl_close($curl);
              // echo $response;
              $a = '<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/"><s:Body><CreateInvoiceResponse xmlns="http://tempuri.org/"><CreateInvoiceResult xmlns:a="http://schemas.datacontract.org/2004/07/WCFServices.Prop" xmlns:i="http://www.w3.org/2001/XMLSchema-instance"><a:message>Success</a:message><a:statuscode>1</a:statuscode></CreateInvoiceResult></CreateInvoiceResponse></s:Body></s:Envelope>';
              $b = '<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/"><s:Body><CreateInvoiceResponse xmlns="http://tempuri.org/"><CreateInvoiceResult xmlns:a="http://schemas.datacontract.org/2004/07/WCFServices.Prop" xmlns:i="http://www.w3.org/2001/XMLSchema-instance"><a:message>Duplicate Invoice</a:message><a:statuscode>2</a:statuscode></CreateInvoiceResult></CreateInvoiceResponse></s:Body></s:Envelope>';
              if($response == $a){
              
                $orders = Order::select('*')
                ->where([
                    ['order_id', '=', $id ],
                ])->get(); 
                foreach ($orders as $order) {
                  $order->update_status = 1;
                  $order->save();
                  
                  }
              }else{
                $orders = Order::select('*')
                ->where([
                    ['order_id', '=', $id ],
                ])->get(); 
                foreach ($orders as $order) {
                  $order->update_status = 2;
                  $order->save();
                  
                  }
              }  
  

            } //orderend

    
            return redirect('/orders')->with('message', 'Work Done;') ;

    }

    public function verify_cscart_order($data, $id)
    {

      $order= new Order;

      $table = $order->getTable();

      $columns = \DB::getSchemaBuilder()->getColumnListing($table);

      $c = count($columns);
      $cscart = [];
      for ($i=0 ; $i < $c ; $i++ ) { 
            if($data == $columns[$i]){
                      // $cscart += $columns[$i];
              array_push($cscart, $columns[$i]);
            }

        }
          $cscart1 = $cscart[0];
          if(is_null($cscart1)){
            $adam = $this->verify_cscart_OrderItem($data, $id);
            }else{
             $orders = Order::select('*')
                 ->where([
                    ['order_id', '=', $id],
                ])->get();
                 foreach ($orders as $order){
                    $adam = $order->$cscart1;
                }
            }
        return $adam;
    }

public function verify_cscart_OrderItem($data , $id)
{
      $data1= new OrderItem;

      $table = $data1->getTable();

      $column1s = \DB::getSchemaBuilder()->getColumnListing($table);
      $cscart2 = [];
      $c1 = count($column1s);
      for ($i=0 ; $i < $c1 ; $i++ ) { 
            if($data == $column1s[$i]){
              $cs = $column1s[$i];
              array_push($cscart2, $column1s[$i]);
          }   
        }
        $cscart3 = $cscart2[0];
        $orders = OrderItem::select('*')
        ->where([
            ['order_id', '=', $id],
        ])->get();
        foreach ($orders as $order){
            $adam = $order->$cscart3;
        }
        return $adam;
      // return $cscart;
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