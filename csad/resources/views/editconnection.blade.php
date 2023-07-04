@extends('layouts.template')

@section('content')
<div class="container">
	<form action="/updateconnection" method="POST" enctype="mltipart/form-data">
		@csrf
		<legend>Edit Connection</legend>
		
		
			<input type="hidden" name="id" value="{{ $connection->id }}">

			URL API Prefix &emsp;&nbsp;<input type="text" name="cscart_api_url" size="50"  required="required"  value="{{ $connection->api_url_prefix }}"> <br><br>

			Username &emsp;&emsp;&emsp;<input type="text" name="cscart_username" size="30" required="required" value="{{ $connection->username }}"> <br><br>

			Api Key &emsp;&emsp;&emsp;&emsp;<input type="text" name="cscart_api_key" size="50" required="required" value="{{ $connection->api_key }}"> <br><br>

		<button class="btn btn-primary" type="submit">Update</button><br>
		
		
	</form>
</div>
@endsection