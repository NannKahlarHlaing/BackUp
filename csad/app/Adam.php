<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adam extends Model
{
    protected $fillable = ['cscart_orderid', 'BranchCode', 'Currency','CompanyCode', 'CustomerCode','CustomerShipCode','DeliveryDate', 'DistributerCode', 'InvoiceDate','LineTotal', 'RoundingAmount','SalesInvoiceCode', 'SalesOrderCode', 'SalesManCode', 'Status', 'TotalDiscount', 'TotalGross', 'TotalNet', 'TotalTax', 'WarehouseCode', 'login', 'password', 'BaseQuantity', 'BaseUOM', 'ConvRate', 'DiscountAmount', 'GrossAmount', 'ItemCode', 'LineNumber', 'LineType', 'NetAmount', 'Quantity', 'SupplierCode', 'TaxAmount', 'UOM', 'UnitPrice'];
}