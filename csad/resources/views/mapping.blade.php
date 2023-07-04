@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-9">
		<form method="POST" action="/savetemplate" enctype="mltipart/form-data"  >
			@csrf
			<fieldset>
				<legend>Fields Mapping</legend>
				<div class="" id="answerform">
					<table class="">
						<thead>
							<tr>
								<th>CS-Cart</th>
								<th></th>
								<th>ADAMS</th>
								<th>Default</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<select class="selects" name="csfield1">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield1" value="BranchCode" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default1" id="default1">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield2" >
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield2" value="CompanyCode" readonly>

								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default2" id="default2">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield34">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield34" value="Currency" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default34" id="default34">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield3">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield3" value="CustomerCode" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default3" id="default3">
								</td>
							</tr>

							<tr>
								<td>
									<select class="selects" name="csfield4">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield4" value="CustomerShipCode" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default4" id="default4">
								</td>
							</tr>

							<tr>
								<td>
									<select class="selects" name="csfield5">
										
										<option value="cscart" selected="selected">Default</option>
										
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield5" id="adamsfield5" value="DeliveryDate" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="date" name="default5" id="default5" value="<?php echo date('Y-m-d'); ?>" readonly >
								</td>
							</tr>

							<tr>
								<td>
									<select class="selects" name="csfield6">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield6" value="DistributerCode" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default6" id="default6">
								</td>
							</tr>

							<tr>
								<td>
									<select class="selects" name="csfield7">
										
										<option value="cscart" selected="selected">Default</option>
										
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield7" id="adamsfield7" value="InvoiceDate" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="date" name="default7" id="default7" value="<?php echo date('Y-m-d'); ?>" readonly>

								</td>
							</tr>

							<tr>
								<td>
									<select class="selects" name="csfield8">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield8" value="LineTotal" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default8" id="default8">
								</td>
							</tr>

							<tr>
								<td>
									<select class="selects" name="csfield9">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield9" value="RoundingAmount" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default9" id="default9">
								</td>
							</tr>

							<tr>
								<td>
									<select class="selects" name="csfield10">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield10" value="SalesInvoiceCode" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default10" id="default10">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield11">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield11" value="SalesOrderCode" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default11" id="default11">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield12">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield12" value="SalesManCode" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default12" id="default12">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield13">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield13" value="Status" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default13" id="default13">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield14">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield14" value="TotalDiscount" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default14" id="default14">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield15">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield15" value="TotalGross" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default15" id="default15">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield16">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield16" value="TotalNet" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default16" id="default16">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield17">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield17" value="TotalTax" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default17" id="default17">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield18">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield18" value="WarehouseCode" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default18" id="default18">
								</td>
							</tr>
							<!-- <tr>
								<td>
									<select class="selects" name="csfield19">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield19" value="invoiceDetails" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default19" id="default19">
								</td>
							</tr> -->
							<tr>
								<td>
									<select class="selects" name="csfield20">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield20" value="login" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default20" id="default20">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield21">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield21" value="password" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default21" id="default21">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield22">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield22" value="BaseQuantity" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default22" id="default22">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield23">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield23" value="BaseUOM" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default23" id="default23">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield24">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield24" value="ConvRate" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default24" id="default24">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield25">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield25" value="DiscountAmount" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default25" id="default25">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield26">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield26" value="GrossAmount" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default26" id="default26">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield27">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield27" value="ItemCode" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default27" id="default27">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield28">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield28" value="LineNumber" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default28" id="default28">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield29">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield29" value="LineType" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default29" id="default29">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield30">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield30" value="NetAmount" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default30" id="default30">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield31">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield31" value="Quantity" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default31" id="default31">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield32">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield32" value="SupplierCode" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default32" id="default32">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield33">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield33" value="TaxAmount" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default33" id="default33">
								</td>
							</tr>
							
							<tr>
								<td>
									<select class="selects" name="csfield35">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield35" value="UOM" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default35" id="default35">
								</td>
							</tr>
							<tr>
								<td>
									<select class="selects" name="csfield36">
										<option>Please Select</option>
										<option value="cscart">Default</option>
										<option value="order_id">order_id</option>
										<option value="parent_order_id">parent_order_id</option>
										<option value="user_id">user_id</option>
										<option value="company_id">company_id</option>
										<option value="company">company</option>
										<option value="item_id">item_id</option>
										<option value="product_id">product_id</option>
										<option value="product">product</option>
										<option value="product_status">product_status</option>
										<option value="orderitem_price">orderitem_price</option>
										<option value="orderitem_base_price">orderitem_base_price</option>
										<option value="orderitem_original_price">orderitem_original_price</option>
										<option value="orderitem_amount">orderitem_amount</option>
										<option value="orderitem_discount">orderitem_discount</option>
										<option value="orderitem_tax_value">orderitem_tax_value</option>
										<option value="firstname">firstname</option>
										<option value="lastname">lastname</option>
										<option value="email">email</option>
										<option value="phone">phone</option>
										<option value="status">status</option>
										<option value="ip_address">ip_address</option>
										<option value="total">total</option>
										<option value="subtotal">subtotal</option>
										<option value="discount">discount</option>
										<option value="subtotal_discount">subtotal_discount</option>
										<option value="need_shipping">need_shipping</option>
										<option value="shipping_cost">shipping_cost</option>
										
										<option value="tax_exempt">tax_exempt</option>	
										<option value="tax_subtotal">tax_subtotal</option>
										<option value="timestamp">timestamp</option>
										<option value="payment_id">payment_id</option>
										<option value="profile_id">profile_id</option>
										<option value="localization_id">localization_id</option>
										<option value="storefront_id">storefront_id</option>
										<option value="secondary_currency">secondary_currency</option>
										<option value="b_country_descr">b_country_descr</option>
										<option value="s_country_descr">s_country_descr</option>
										<option value="b_address">b_address</option>
										<option value="b_country">b_country</option>
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield36" value="UnitPrice" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" size="20" name="default36" id="default36">
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</fieldset><br><br>
				<div class="form-group">
					<label class="form-control-label">Template Name</label>
					<input type="text" name="template_name" value="">
				</div>
				<button class="btn-primary ">Save Fields</button><br><br>
			</form>

		</div>
		<div class="col-3">
			<form action="/mapping" method="POST" enctype="mltipart/form-data" >
				@csrf
				<fieldset>
					<legend>Saved Template</legend>
					<div id="answerform1" >
						<table class="table table-borderless">
							<tbody>
								@foreach($templates as $template)
								<tr>
									<td>
										
										<p>{{ $template->template_name }}</p>
										<!-- <a href="/setdefault/{{ $template->id }}" style="margin-top: 10px;margin-right: 10px;text-decoration: none;">{{ $template->template_name }}</a> -->
									</td>
									<td>
										@php
										if($template->active_status == 1 ){
										echo '<i class="fa fa-check-circle" style="margin-top: 15px;" aria-hidden="true"></i>';
									}
									@endphp
								</td>
								<td>
									<input type="hidden" name="active_status" value="{{ $template->active_status}}">
									<a href="/setdefault/{{ $template->id }}" class="btn btn-primary">Set Default</a>
								</td>
								<td>
									<input type="hidden" name="template_id" value="{{ $template->id }}">
									<a href="/edittemplate/{{ $template->id }}" ><i class="fa fa-pencil-square" style="font-size: 45px;margin-top: -5px;" aria-hidden="true"></i></a>
								</td>
								<td>
									<a href="/deletetemplate/{{ $template->id }}" ><i class="fa fa-trash" style="font-size: 45px;margin-top: -10px;" aria-hidden="true"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>

			</fieldset>
		

		</form> 

	</div>
</div>


<script type="text/javascript">
	
// $('.select').on('change', function() {
//   $('option').prop('disabled', false); //reset all the disabled options on every change event
//   $('select').each(function() { //loop through all the select elements
//     var val = this.value;
//     $('select').not(this).find('option').filter(function() { //filter option elements having value as selected option
//       return this.value === val;
//     }).prop('disabled', true); //disable those option elements
//   });
// }).change(); //trihgger change handler initially!

// $(document).ready(function(){
	

// 		$("#adamsfield1").change(function(){
// 			$(this).find("option:selected").each(function(){
// 				var optionValue = $(this).attr("value");
// 				var value = 'DeliveryDate';
// 				var value1 = 'InvoiceDate';
// 				if(optionValue == value){
// 					document.getElementById('default1').type = 'date';
// 				} else if(optionValue == value1){
// 					document.getElementById('default1').type = 'date';
// 				}
// 				else{
// 					document.getElementById('default1').type = 'text';
// 				}
// 			});
// 		}).change();
// 		$("#adamsfield2").change(function(){
// 			$(this).find("option:selected").each(function(){
// 				var optionValue = $(this).attr("value");
// 				var value = 'DeliveryDate';
// 				var value1 = 'InvoiceDate';
// 				if(optionValue == value){
// 					document.getElementById('default2').type = 'date';
// 				} else if(optionValue == value1){
// 					document.getElementById('default2').type = 'date';
// 				}
// 				else{
// 					document.getElementById('default2').type = 'text';
// 				}
// 			});
// 		}).change();
// 		$("#adamsfield3").change(function(){
// 			$(this).find("option:selected").each(function(){
// 				var optionValue = $(this).attr("value");
// 				var value = 'DeliveryDate';
// 				var value1 = 'InvoiceDate';
// 				if(optionValue == value){
// 					document.getElementById('default3').type = 'date';
// 				} else if(optionValue == value1){
// 					document.getElementById('default3').type = 'date';
// 				}
// 				else{
// 					document.getElementById('default3').type = 'text';
// 				}
// 			});
// 		}).change();
// 		$("#adamsfield4").change(function(){
// 			$(this).find("option:selected").each(function(){
// 				var optionValue = $(this).attr("value");
// 				var value = 'DeliveryDate';
// 				var value1 = 'InvoiceDate';
// 				if(optionValue == value){
// 					document.getElementById('default4').type = 'date';
// 				} else if(optionValue == value1){
// 					document.getElementById('default4').type = 'date';
// 				}
// 				else{
// 					document.getElementById('default4').type = 'text';
// 				}
// 			});
// 		}).change();
// 		$("#adamsfield5").change(function(){
// 			$(this).find("option:selected").each(function(){
// 				var optionValue = $(this).attr("value");
// 				var value = 'DeliveryDate';
// 				var value1 = 'InvoiceDate';
// 				if(optionValue == value){
// 					document.getElementById('default5').type = 'date';
// 				} else if(optionValue == value1){
// 					document.getElementById('default5').type = 'date';
// 				}
// 				else{
// 					document.getElementById('default5').type = 'text';
// 				}
// 			});
// 		}).change();
// 		$("#adamsfield6").change(function(){
// 			$(this).find("option:selected").each(function(){
// 				var optionValue = $(this).attr("value");
// 				var value = 'DeliveryDate';
// 				var value1 = 'InvoiceDate';
// 				if(optionValue == value){
// 					document.getElementById('default6').type = 'date';
// 				} else if(optionValue == value1){
// 					document.getElementById('default6').type = 'date';
// 				}
// 				else{
// 					document.getElementById('default6').type = 'text';
// 				}
// 			});
// 		}).change();
// 		$("#adamsfield7").change(function(){
// 			$(this).find("option:selected").each(function(){
// 				var optionValue = $(this).attr("value");
// 				var value = 'DeliveryDate';
// 				var value1 = 'InvoiceDate';
// 				if(optionValue == value){
// 					document.getElementById('default7').type = 'date';
// 				} else if(optionValue == value1){
// 					document.getElementById('default7').type = 'date';
// 				}
// 				else{
// 					document.getElementById('default7').type = 'text';
// 				}
// 			});
// 		}).change();
// 		$("#adamsfield8").change(function(){
// 			$(this).find("option:selected").each(function(){
// 				var optionValue = $(this).attr("value");
// 				var value = 'DeliveryDate';
// 				var value1 = 'InvoiceDate';
// 				if(optionValue == value){
// 					document.getElementById('default8').type = 'date';
// 				} else if(optionValue == value1){
// 					document.getElementById('default8').type = 'date';
// 				}
// 				else{
// 					document.getElementById('default8').type = 'text';
// 				}
// 			});
// 		}).change();
// 		$("#adamsfield9").change(function(){
// 			$(this).find("option:selected").each(function(){
// 				var optionValue = $(this).attr("value");
// 				var value = 'DeliveryDate';
// 				var value1 = 'InvoiceDate';
// 				if(optionValue == value){
// 					document.getElementById('default9').type = 'date';
// 				} else if(optionValue == value1){
// 					document.getElementById('default9').type = 'date';
// 				}
// 				else{
// 					document.getElementById('default9').type = 'text';
// 				}
// 			});
// 		}).change();
// 		$("#adamsfield10").change(function(){
// 			$(this).find("option:selected").each(function(){
// 				var optionValue = $(this).attr("value");
// 				var value = 'DeliveryDate';
// 				var value1 = 'InvoiceDate';
// 				if(optionValue == value){
// 					document.getElementById('default10').type = 'date';
// 				} else if(optionValue == value1){
// 					document.getElementById('default10').type = 'date';
// 				}
// 				else{
// 					document.getElementById('default10').type = 'text';
// 				}
// 			});
// 		}).change();
// 	});
</script>
<style type="text/css">

#answerform{
	/*position: relative;*/
	border: 2px solid gray;
	padding: 10px;
	height:500px;
	margin-top:30px;
	background: white;
	width: 100%;
	overflow-y: scroll;
}
#answerform1{
	/*position: relative;*/
	border: 2px solid gray;
	padding: 5px;
	height:200px;
	margin-top:30px;
	background: white;
	width: 100%;
	overflow-y: scroll;
}
.selects{
	margin-left: 10px;
	margin-right: 20px;
}
.select{
	margin-left: 10px;
	margin-right: 20px;
}
.fa-angle-double-right{
	margin-left: 20px;
	margin-right: 30px;
}


/*input[type="date"] {
	position: relative;
	padding: 10px;
}

input[type="date"]::-webkit-calendar-picker-indicator {
	color: transparent;
	background: none;
	z-index: 1;
}

input[type="date"]:before {
	color: transparent;
	background: none;
	display: block;
	font-family: 'FontAwesome';
	content: '\f073';
 This is the calendar icon in FontAwesome */
	/*width: 15px;
	height: 20px;
	position: absolute;
	top: 12px;
	right: 6px;
	color: #999;
}*/
th{
	font-size: 18px;
	font-weight: bold;
	padding-left: 60px;
	padding-bottom: 15px;
	
}
</style>



@endsection
