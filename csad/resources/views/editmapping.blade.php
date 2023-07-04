@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-9">
		<form method="POST" action="/update" enctype="mltipart/form-data"  >
			@csrf
			<fieldset>
				<legend>Fields Mapping</legend><br>
				<div class="form-group">
					<label class="form-control-label">Template Name</label>
					<input type="hidden" name="template_id" value="{{ $template->id}}">
					<input type="text" class="" name="template_name" value="{{ $template->template_name}}">
				</div>
				<div class="" id="answerform">
					<table>
						<thead>
							<tr>
								<th>CS-Cart</th>
								<th></th>
								<th>ADAMS</th>
								<th>Default</th>
							</tr>
						</thead>
						<tbody>
							@foreach($field1s as $field1)
							<tr>
								<td>
									<select class="selects" name="csfield1">
										<option value="{{ $field1->cscart_fields}}" selected="selected">{{ $field1->cscart_fields}}</option>
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
									<input type="text" name="adamsfield1" id="adamsfield1" value="{{ $field1->adams_fields }}" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default1" value="{{ $field1->default}}" id="default1">
								</td>
							</tr>
							@endforeach

							@foreach($field2s as $field2)
							<tr>
								<td>
									<select class="selects" name="csfield2">
										<option value="{{ $field2->cscart_fields}}" selected="selected">{{ $field2->cscart_fields}}</option>	
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
									<input type="text" name="adamsfield2" id="adamsfield2" value="{{ $field2->adams_fields }}" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default2" value="{{ $field2->default}}" id="default2">
								</td>
							</tr>
							@endforeach

							@foreach($field34s as $field34)
							<tr>
								<td>
									<select class="selects" name="csfield34">
										<option value="{{ $field34->cscart_fields}}" selected="selected">{{ $field34->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield34" id="adamsfield34" value="{{ $field34->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default34" value="{{ $field34->default}}" id="default34">
								</td>
							</tr>
							@endforeach

							@foreach($field3s as $field3)
							<tr>
								<td>
									<select class="selects" name="csfield3">
										<option value="{{ $field3->cscart_fields}}" selected="selected">{{ $field3->cscart_fields}}</option>
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
									<input type="text" name="adamsfield3" id="adamsfield3" value="{{ $field3->adams_fields }}" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default3" value="{{ $field3->default}}" id="default3">
								</td>
							</tr>
							@endforeach

							@foreach($field4s as $field4)
							<tr>
								<td>
									<select class="selects" name="csfield4">
										<option value="{{ $field4->cscart_fields}}" selected="selected">{{ $field4->cscart_fields}}</option>	
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
									<input type="text" name="adamsfield4" id="adamsfield4" value="{{ $field4->adams_fields }}" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default4" value="{{ $field4->default}}" id="default4">
								</td>
							</tr>
							@endforeach

							@foreach($field5s as $field5)
							<tr>
								<td>
									<select class="selects" name="csfield5">
										<option value="{{ $field5->cscart_fields}}" selected="selected">{{ $field5->cscart_fields}}</option>	
										
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield5" id="adamsfield5" value="{{ $field5->adams_fields }}" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default5" value="<?php echo date('Y-m-d'); ?>" id="default5" readonly>
								</td>
							</tr>
							@endforeach

							@foreach($field6s as $field6)
							<tr>
								<td>
									<select class="selects" name="csfield6">
										<option value="{{ $field6->cscart_fields}}" selected="selected">{{ $field6->cscart_fields}}</option>	
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
									<input type="text" name="adamsfield6" id="adamsfield6" value="{{ $field6->adams_fields }}" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default6" value="{{ $field6->default}}" id="default6">
								</td>
							</tr>
							@endforeach

							@foreach($field7s as $field7)
							<tr>
								<td>
									<select class="selects" name="csfield7">
										<option value="{{ $field7->cscart_fields}}" selected="selected">{{ $field7->cscart_fields}}</option>	
										
									</select>
								</td>
								<td>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
								</td>
								<td>
									<input type="text" name="adamsfield7" id="adamsfield7" value="{{ $field7->adams_fields }}" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default7" value="<?php echo date('Y-m-d'); ?>" id="default7" readonly>
								</td>
							</tr>
							@endforeach

							@foreach($field8s as $field8)
							<tr>
								<td>
									<select class="selects" name="csfield8">
										<option value="{{ $field8->cscart_fields}}" selected="selected">{{ $field8->cscart_fields}}</option>	
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
									<input type="text" name="adamsfield8" id="adamsfield8" value="{{ $field8->adams_fields }}" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default8" value="{{ $field8->default}}" id="default8">
								</td>
							</tr>
							@endforeach

							@foreach($field9s as $field9)
							<tr>
								<td>
									<select class="selects" name="csfield9">
										<option value="{{ $field9->cscart_fields}}" selected="selected">{{ $field9->cscart_fields}}</option>	
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
									<input type="text" name="adamsfield9" id="adamsfield9" value="{{ $field9->adams_fields }}" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default9" value="{{ $field9->default}}" id="default9">
								</td>
							</tr>
							@endforeach

							@foreach($field10s as $field10)
							<tr>
								<td>
									<select class="selects" name="csfield10">
										<option value="{{ $field10->cscart_fields}}" selected="selected">{{ $field10->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield10" id="adamsfield10" value="{{ $field10->adams_fields }}" readonly>
									
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default10" value="{{ $field10->default}}" id="default10">
								</td>
							</tr>
							@endforeach

							@foreach($field11s as $field11)
							<tr>
								<td>
									<select class="selects" name="csfield11">
										<option value="{{ $field11->cscart_fields}}" selected="selected">{{ $field11->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield11" id="adamsfield11" value="{{ $field11->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default11" value="{{ $field11->default}}" id="default11">
								</td>
							</tr>
							@endforeach

							@foreach($field12s as $field12)
							<tr>
								<td>
									<select class="selects" name="csfield12">
										<option value="{{ $field12->cscart_fields}}" selected="selected">{{ $field12->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield12" id="adamsfield12" value="{{ $field12->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default12" value="{{ $field12->default}}" id="default12">
								</td>
							</tr>
							@endforeach

							@foreach($field13s as $field13)
							<tr>
								<td>
									<select class="selects" name="csfield13">
										<option value="{{ $field13->cscart_fields}}" selected="selected">{{ $field13->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield13" id="adamsfield13" value="{{ $field13->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default13" value="{{ $field13->default}}" id="default13">
								</td>
							</tr>
							@endforeach

							@foreach($field14s as $field14)
							<tr>
								<td>
									<select class="selects" name="csfield14">
										<option value="{{ $field14->cscart_fields}}" selected="selected">{{ $field14->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield14" id="adamsfield14" value="{{ $field14->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default14" value="{{ $field14->default}}" id="default14">
								</td>
							</tr>
							@endforeach

							@foreach($field15s as $field15)
							<tr>
								<td>
									<select class="selects" name="csfield15">
										<option value="{{ $field15->cscart_fields}}" selected="selected">{{ $field15->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield15" id="adamsfield15" value="{{ $field15->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default15" value="{{ $field15->default}}" id="default15">
								</td>
							</tr>
							@endforeach

							@foreach($field16s as $field16)
							<tr>
								<td>
									<select class="selects" name="csfield16">
										<option value="{{ $field16->cscart_fields}}" selected="selected">{{ $field16->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield16" id="adamsfield16" value="{{ $field16->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default16" value="{{ $field16->default}}" id="default16">
								</td>
							</tr>
							@endforeach

							<!-- @foreach($field17s as $field17)
							<tr>
								<td>
									<select class="selects" name="csfield16">
										<option value="{{ $field17->cscart_fields}}" selected="selected">{{ $field17->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield17" id="adamsfield17" value="{{ $field17->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default17" value="{{ $field17->default}}" id="default17">
								</td>
							</tr>
							@endforeach -->

							@foreach($field17s as $field17)
							<tr>
								<td>
									<select class="selects" name="csfield17">
										<option value="{{ $field17->cscart_fields}}" selected="selected">{{ $field17->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield17" id="adamsfield17" value="{{ $field17->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default17" value="{{ $field17->default}}" id="default17">
								</td>
							</tr>
							@endforeach

							@foreach($field18s as $field18)
							<tr>
								<td>
									<select class="selects" name="csfield18">
										<option value="{{ $field18->cscart_fields}}" selected="selected">{{ $field18->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield18" id="adamsfield16" value="{{ $field18->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default18" value="{{ $field18->default}}" id="default18">
								</td>
							</tr>
							@endforeach

							

							@foreach($field20s as $field20)
							<tr>
								<td>
									<select class="selects" name="csfield20">
										<option value="{{ $field20->cscart_fields}}" selected="selected">{{ $field20->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield20" id="adamsfield20" value="{{ $field20->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default20" value="{{ $field20->default}}" id="default20">
								</td>
							</tr>
							@endforeach

							<!-- @foreach($field21s as $field21)
							<tr>
								<td>
									<select class="selects" name="csfield21">
										<option value="{{ $field21->cscart_fields}}" selected="selected">{{ $field21->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield21" id="adamsfield21" value="{{ $field21->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default21" value="{{ $field21->default}}" id="default21">
								</td>
							</tr>
							@endforeach -->

							@foreach($field21s as $field21)
							<tr>
								<td>
									<select class="selects" name="csfield21">
										<option value="{{ $field21->cscart_fields}}" selected="selected">{{ $field21->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield21" id="adamsfield21" value="{{ $field21->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default21" value="{{ $field21->default}}" id="default21">
								</td>
							</tr>
							@endforeach

							@foreach($field22s as $field22)
							<tr>
								<td>
									<select class="selects" name="csfield22">
										<option value="{{ $field22->cscart_fields}}" selected="selected">{{ $field22->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield22" id="adamsfield22" value="{{ $field22->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default22" value="{{ $field22->default}}" id="default22">
								</td>
							</tr>
							@endforeach

							@foreach($field23s as $field23)
							<tr>
								<td>
									<select class="selects" name="csfield23">
										<option value="{{ $field23->cscart_fields}}" selected="selected">{{ $field23->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield23" id="adamsfield23" value="{{ $field23->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default23" value="{{ $field23->default}}" id="default23">
								</td>
							</tr>
							@endforeach

							@foreach($field24s as $field24)
							<tr>
								<td>
									<select class="selects" name="csfield24">
										<option value="{{ $field24->cscart_fields}}" selected="selected">{{ $field24->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield24" id="adamsfield24" value="{{ $field24->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default24" value="{{ $field24->default}}" id="default24">
								</td>
							</tr>
							@endforeach

							@foreach($field25s as $field25)
							<tr>
								<td>
									<select class="selects" name="csfield25">
										<option value="{{ $field25->cscart_fields}}" selected="selected">{{ $field25->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield25" id="adamsfield25" value="{{ $field25->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default25" value="{{ $field25->default}}" id="default25">
								</td>
							</tr>
							@endforeach

							@foreach($field26s as $field26)
							<tr>
								<td>
									<select class="selects" name="csfield26">
										<option value="{{ $field26->cscart_fields}}" selected="selected">{{ $field26->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield26" id="adamsfield26" value="{{ $field26->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default26" value="{{ $field26->default}}" id="default26">
								</td>
							</tr>
							@endforeach

							@foreach($field27s as $field27)
							<tr>
								<td>
									<select class="selects" name="csfield27">
										<option value="{{ $field27->cscart_fields}}" selected="selected">{{ $field27->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield27" id="adamsfield27" value="{{ $field27->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default27" value="{{ $field27->default}}" id="default27">
								</td>
							</tr>
							@endforeach

							@foreach($field28s as $field28)
							<tr>
								<td>
									<select class="selects" name="csfield28">
										<option value="{{ $field28->cscart_fields}}" selected="selected">{{ $field28->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield28" id="adamsfield28" value="{{ $field28->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default28" value="{{ $field28->default}}" id="default28">
								</td>
							</tr>
							@endforeach

							@foreach($field29s as $field29)
							<tr>
								<td>
									<select class="selects" name="csfield29">
										<option value="{{ $field29->cscart_fields}}" selected="selected">{{ $field29->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield29" id="adamsfield29" value="{{ $field29->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default29" value="{{ $field29->default}}" id="default29">
								</td>
							</tr>
							@endforeach

							@foreach($field30s as $field30)
							<tr>
								<td>
									<select class="selects" name="csfield30">
										<option value="{{ $field30->cscart_fields}}" selected="selected">{{ $field30->cscart_fields}}</option>			
										<option>Please Select</option>
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
									<input type="text" name="adamsfield30" id="adamsfield30" value="{{ $field30->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default30" value="{{ $field30->default}}" id="default30">
								</td>
							</tr>
							@endforeach

							@foreach($field31s as $field31)
							<tr>
								<td>
									<select class="selects" name="csfield31">
										<option value="{{ $field31->cscart_fields}}" selected="selected">{{ $field31->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield31" id="adamsfield31" value="{{ $field31->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default31" value="{{ $field31->default}}" id="default31">
								</td>
							</tr>
							@endforeach

							@foreach($field32s as $field32)
							<tr>
								<td>
									<select class="selects" name="csfield32">
										<option value="{{ $field32->cscart_fields}}" selected="selected">{{ $field32->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield32" id="adamsfield32" value="{{ $field32->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default32" value="{{ $field32->default}}" id="default32">
								</td>
							</tr>
							@endforeach

							@foreach($field33s as $field33)
							<tr>
								<td>
									<select class="selects" name="csfield33">
										<option value="{{ $field33->cscart_fields}}" selected="selected">{{ $field33->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield33" id="adamsfield33" value="{{ $field33->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default33" value="{{ $field33->default}}" id="default33">
								</td>
							</tr>
							@endforeach

							

							@foreach($field35s as $field35)
							<tr>
								<td>
									<select class="selects" name="csfield35">
										<option value="{{ $field35->cscart_fields}}" selected="selected">{{ $field35->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield35" id="adamsfield35" value="{{ $field35->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default35" value="{{ $field35->default}}" id="default35">
								</td>
							</tr>
							@endforeach

							@foreach($field36s as $field36)
							<tr>
								<td>
									<select class="selects" name="csfield36">
										<option value="{{ $field36->cscart_fields}}" selected="selected">{{ $field36->cscart_fields}}</option>			
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
									<input type="text" name="adamsfield36" id="adamsfield36" value="{{ $field36->adams_fields }}" readonly>
								</td>
								<td>
									<label>Default</label>&emsp;
									<input type="text" name="default36" value="{{ $field36->default}}" id="default36">
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
			</fieldset><br><br>
			
			
			<button type="submit" class="btn btn-primary">Update Fields</button>
			<br><br>
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

	// 	var opt1 = 'DeliveryDate';
	// 	var opt2 = 'InvoiceDate';
	// 	var result1 = document.getElementsByName('adamsfield1').value;
	// 	if(result1 == opt1 || result1 == opt2){
	// 		document.getElementById('default1').type = 'date';
	// 	}else{
	// 		document.getElementById('default1').type = 'text';
	// 	}
	// 	var result2 = document.getElementsByName('adamsfield2').value;
	// 	if(result2 == opt1 || result2 == opt2){
	// 		document.getElementById('default2').type = 'date';
	// 	}
	// 	var result3 = document.getElementsByName('adamsfield3').value;
	// 	if(result3 == opt1 || result3 == opt2){
	// 		document.getElementById('default3').type = 'date';
	// 	}
	// 	var result4 = document.getElementsByName('adamsfield4').value;
	// 	if(result4 == opt1 || result4 == opt2){
	// 		document.getElementById('default4').type = 'date';
	// 	}
	// 	var result5 = document.getElementById('adamsfield5').value;
	// 	if(result5 == opt1 || result5 == opt2 ){
	// 		document.getElementById('default5').type = 'date';
	// 	}
	// 	var result6 = document.getElementById('adamsfield6').value;
	// 	if(result6 == opt1 || result6 == opt2 ){
	// 		document.getElementById('default6').type = 'date';
	// 	}
	// 	var result7 = document.getElementById('adamsfield7').value;
	// 	if(result7 == 'InvoiceDate'){
	// 		document.getElementById('default7').type = 'date';
	// 	}else{
	// 		document.getElementById('default7').type = 'hidden';
	// 	}
	// 	var result8 = document.getElementById('adamsfield8').value;
	// 	if(result8 == opt1 || result8 == opt2 ){
	// 		document.getElementById('default8').type = 'date';
	// 	}
	// 	var result9 = document.getElementById('adamsfield9').value;
	// 	if(result9 == opt1 || result9 == opt2 ){
	// 		document.getElementById('default9').type = 'date';
	// 	}
	// 	var result10 = document.getElementById('adamsfield10').value;
	// 	if(result10 == opt1 || result10 == opt2 ){
	// 		document.getElementById('default10').type = 'date';
	// 	}

	// 	$("#adamsfield1").change(function(){
	// 		$(this).find("option:selected").each(function(){
	// 			var optionValue = $(this).attr("value");
	// 			var value = 'DeliveryDate';
	// 			var value1 = 'InvoiceDate';
	// 			if(optionValue == value){
	// 				document.getElementById('default1').type = 'date';
	// 			} else if(optionValue == value1){
	// 				document.getElementById('default1').type = 'date';
	// 			}
	// 			else{
	// 				document.getElementById('default1').type = 'text';
	// 			}
	// 		});
	// 	}).change();
	// 	$("#adamsfield2").change(function(){
	// 		$(this).find("option:selected").each(function(){
	// 			var optionValue = $(this).attr("value");
	// 			var value = 'DeliveryDate';
	// 			var value1 = 'InvoiceDate';
	// 			if(optionValue == value){
	// 				document.getElementById('default2').type = 'date';
	// 			} else if(optionValue == value1){
	// 				document.getElementById('default2').type = 'date';
	// 			}
	// 			else{
	// 				document.getElementById('default2').type = 'text';
	// 			}
	// 		});
	// 	}).change();
	// 	$("#adamsfield3").change(function(){
	// 		$(this).find("option:selected").each(function(){
	// 			var optionValue = $(this).attr("value");
	// 			var value = 'DeliveryDate';
	// 			var value1 = 'InvoiceDate';
	// 			if(optionValue == value){
	// 				document.getElementById('default3').type = 'date';
	// 			} else if(optionValue == value1){
	// 				document.getElementById('default3').type = 'date';
	// 			}
	// 			else{
	// 				document.getElementById('default3').type = 'text';
	// 			}
	// 		});
	// 	}).change();
	// 	$("#adamsfield4").change(function(){
	// 		$(this).find("option:selected").each(function(){
	// 			var optionValue = $(this).attr("value");
	// 			var value = 'DeliveryDate';
	// 			var value1 = 'InvoiceDate';
	// 			if(optionValue == value){
	// 				document.getElementById('default4').type = 'date';
	// 			} else if(optionValue == value1){
	// 				document.getElementById('default4').type = 'date';
	// 			}
	// 			else{
	// 				document.getElementById('default4').type = 'text';
	// 			}
	// 		});
	// 	}).change();
	// 	$("#adamsfield5").change(function(){
	// 		$(this).find("option:selected").each(function(){
	// 			var optionValue = $(this).attr("value");
	// 			var value = 'DeliveryDate';
	// 			var value1 = 'InvoiceDate';
	// 			if(optionValue == value){
	// 				document.getElementById('default5').type = 'date';
	// 			} else if(optionValue == value1){
	// 				document.getElementById('default5').type = 'date';
	// 			}
	// 			else{
	// 				document.getElementById('default5').type = 'text';
	// 			}
	// 		});
	// 	}).change();
	// 	$("#adamsfield6").change(function(){
	// 		$(this).find("option:selected").each(function(){
	// 			var optionValue = $(this).attr("value");
	// 			var value = 'DeliveryDate';
	// 			var value1 = 'InvoiceDate';
	// 			if(optionValue == value){
	// 				document.getElementById('default6').type = 'date';
	// 			} else if(optionValue == value1){
	// 				document.getElementById('default6').type = 'date';
	// 			}
	// 			else{
	// 				document.getElementById('default6').type = 'text';
	// 			}
	// 		});
	// 	}).change();
	// 	$("#adamsfield7").change(function(){
	// 		$(this).find("option:selected").each(function(){
	// 			var optionValue = $(this).attr("value");
	// 			var value = 'DeliveryDate';
	// 			var value1 = 'InvoiceDate';
	// 			if(optionValue == value){
	// 				document.getElementById('default7').type = 'date';
	// 			} else if(optionValue == value1){
	// 				document.getElementById('default7').type = 'date';
	// 			}
	// 			else{
	// 				document.getElementById('default7').type = 'text';
	// 			}
	// 		});
	// 	}).change();
	// 	$("#adamsfield8").change(function(){
	// 		$(this).find("option:selected").each(function(){
	// 			var optionValue = $(this).attr("value");
	// 			var value = 'DeliveryDate';
	// 			var value1 = 'InvoiceDate';
	// 			if(optionValue == value){
	// 				document.getElementById('default8').type = 'date';
	// 			} else if(optionValue == value1){
	// 				document.getElementById('default8').type = 'date';
	// 			}
	// 			else{
	// 				document.getElementById('default8').type = 'text';
	// 			}
	// 		});
	// 	}).change();
	// 	$("#adamsfield9").change(function(){
	// 		$(this).find("option:selected").each(function(){
	// 			var optionValue = $(this).attr("value");
	// 			var value = 'DeliveryDate';
	// 			var value1 = 'InvoiceDate';
	// 			if(optionValue == value){
	// 				document.getElementById('default9').type = 'date';
	// 			} else if(optionValue == value1){
	// 				document.getElementById('default9').type = 'date';
	// 			}
	// 			else{
	// 				document.getElementById('default9').type = 'text';
	// 			}
	// 		});
	// 	}).change();
	// 	$("#adamsfield10").change(function(){
	// 		$(this).find("option:selected").each(function(){
	// 			var optionValue = $(this).attr("value");
	// 			var value = 'DeliveryDate';
	// 			var value1 = 'InvoiceDate';
	// 			if(optionValue == value){
	// 				document.getElementById('default10').type = 'date';
	// 			} else if(optionValue == value1){
	// 				document.getElementById('default10').type = 'date';
	// 			}
	// 			else{
	// 				document.getElementById('default10').type = 'text';
	// 			}
	// 		});
	// 	}).change();
	// });
</script>
<style type="text/css">

#answerform{
	/*position: relative;*/
	border: 2px solid gray;
	padding: 30px;
	height:500px;
	
	margin-top: 30px;
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

input[type="date"] {
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
	/* This is the calendar icon in FontAwesome */
	width: 15px;
	height: 20px;
	position: absolute;
	top: 12px;
	right: 6px;
	color: #999;
}
th{
	font-size: 18px;
	padding-left: 60px;
	padding-bottom: 20px;
	
}
</style>

@endsection