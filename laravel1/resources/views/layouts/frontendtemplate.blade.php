<!DOCTYPE html>
<html>
<head>
	<title>Hotel Ba Thaung</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> 
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<link href="/vendor/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	body {
		background-color: #2d9fa3;
		margin: 50px;
	}
	h1{
		color: pink;
		font-size: 4em;
		text-align: center;
		font-weight: bold;
		font-variant: small-caps;
		font-family: serif;
	}
	.navbar{ 
		align-content: center;
	}
	.btn{
		background-color: #125c6d;
		color: black;
		border-radius: 15%;
	}
	p{
		font-size: 17px;
		margin-bottom: 30px;
	}
	.form-inline{
		margin-left: 350px;
	}
	img{
		height: 300px;
		
	}
	.textanimation{
		color: #0d6dbc;
		margin-top: 20px;
		animation:move 7s infinite cubic-bezier(.23,.23,.23,.23);
	}
	@keyframes move{
		0%{left:100%;}
		100%{left:0;}
	}
</style>
</head>
<body>
	
		<h1> Hotel Ba Thaung</h1>
		<nav class="navbar navbar-light m-5" >
			<form class="form-inline">
				<a href="/" class="btn btn-outline-secondary">Home</a>
				<a href="room" class="btn btn-outline-secondary">Room</a>
				<a href="room" class="btn btn-outline-secondary">Service</a>
				<a href="room" class="btn btn-outline-secondary">Contact</a>
				<a href="room" class="btn btn-outline-secondary">About</a>
				<a href="room" class="btn btn-outline-secondary">Booking</a>
				
			</form>
		</nav>

		@yield('content')
	
</body>
</html>