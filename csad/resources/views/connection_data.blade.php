@extends('layouts.template')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-6 col-12">
			<form method="POST" action="/schedule">
				@csrf
				<label> Process Interval</label>&ensp;
				<select name="custom_time">
					<option > Select</option>
					@foreach($tasks as $task)
<!-- 			         <option value="everyFiveMinutes"> 5 minutes</option>
			         <option value="everyTenMinutes"> 10 minutes</option>
			         <option value="everyThirtyMinutes"> 30 minutes</option>
			         <option value="hourly"> 1 hour</option>
			         <option value="everyTwoHours"> 2 hours</option>
			         <option value="daily"> 1 day</option> -->
			         @php
			         $a = 1;
			         	if($task->status == 1 ){
			         	$selected = 'selected';
			         		
			         		
			         	}else{
			         	$selected = '';
			         }
			         @endphp
			         <option value="{{ $task->frequency}}" {{ $selected }}>{{ $task->frequency }}</option>
			        @endforeach
		       </select> 
		       
		       <button class="btn btn-primary">Set Time</button>

	       </form>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
		      @if(session()->has('message'))
			      <div class="alert alert-success">
			        {{ session()->get('message') }}
			      </div>
		      @endif
	    </div>
	</div>
	<form action="/storeconnect" method="POST" enctype="mltipart/form-data">
		@csrf
	
		@php
		foreach($connections as $connection){
		$connect = $connection->id;
		}
		if(is_null($connect)){
		echo '<a href="/addconnection" class="btn btn-primary" id="btn">Create Connection</a><br>';
	}
		$i = 0;
		$array = ['Cs-Cart', 'ADAMS'];
		@endphp
		
		@foreach($connections as $connection)

			
		<!-- <fieldset style="border: 1px solid #ddd !important;padding: 0 1.4em 1.4em 1.4em
			!important;margin: 0 0 1.5em 0 !important;"> -->
		<div class="connect col-lg-8">
				<h3>{{ $array[$i] }}</h3>
				<input type="hidden" name="cs_id" value="{{ $connection->id }}" id="cs_id">

				URL API Prefix &emsp;&nbsp;<input type="text" name="cscart_api_url" size="50"  required="required"  value="{{ $connection->api_url_prefix }}" readonly="readonly"> <br><br>

				Username &emsp;&emsp;&emsp;<input type="text" name="cscart_username" size="30" required="required" value="{{ $connection->username }}" readonly="readonly"> <br><br>

				Api Key &emsp;&emsp;&emsp;&emsp;<input type="password" name="cscart_api_key" size="50" required="required" value="{{ $connection->api_key }}" readonly="readonly"> <br><br>

			<!-- /fieldset> -->

			<a href="/editconnection/{{ $connection->id }}" class="btn btn-primary" style="padding-left: 35px;padding-right: 35px;"> Edit </a><br><br>
		</div>
		@php
		$i++;
		@endphp
		@endforeach
		
	</form>
</div>
<style type="text/css">
	.connect{
		background-color: white;
		padding-left: :30px;
		padding-right :30px;
		padding-top: 20px;
		padding-bottom: 10px;
		border-radius: 3px;
		margin-bottom: 10px;
	}
	.custom-select{
		margin-bottom: 20px;
	}
	.btn-primary{
		margin-bottom: 20px;
	}
</style>
@endsection
	