@extends('layouts.template')

@section('content')
<div class="container">
	<form action="/storeconnect" method="POST" enctype="mltipart/foorm-data">
		@csrf
		
		<fieldset style="border: 1px solid #ddd !important;padding: 0 1.4em 1.4em 1.4em!important;margin: 0 0 1.5em 0 !important;">
			<legend>CS-Cart</legend>

			URL API Prefix &emsp;&nbsp;<input type="text" name="cscart_api_url" size="50"  required="required" value=""> <br><br>

			Username &emsp;&emsp;&emsp;<input type="text" name="cscart_username" size="30" required="required" value=""> <br><br>

			Api Key &emsp;&emsp;&emsp;&emsp;<input type="text" name="cscart_api_key" size="50" required="required" value=""> <br><br>

		</fieldset>

		<fieldset style="border: 1px solid #ddd !important;padding: 0 1.4em 1.4em 1.4em!important;margin: 0 0 1.5em 0 !important;">
			<legend>ADAMS</legend>

			URL API Prefix &emsp;&nbsp;<input type="text" name="admas_api_url" size="50" required="required"> <br><br>

			Username &emsp;&emsp;&emsp;<input type="text" name="adams_username" size="30" required="required"> <br><br>

			Signature &emsp;&emsp;&emsp;&nbsp;<input type="text" name="adams_api_key" size="50" required="required"> <br><br>

		</fieldset>
		
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>
@endsection