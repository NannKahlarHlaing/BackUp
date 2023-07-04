@extends('layouts.frontendtemplate')

@section('content')
<div class="container">
	<div class="row">
		<div class="col col-md-7">
			<p>Hotel Ba Thaung is a famous hotel that ofers is customers excellent services when any customer to stay there. This hotel located near Tharzi Market, Tharzi Road, Monywa Township, Sagaing Division, Myanmar. Siginificant places nearby:</p>
			<ul>
				<li>Kyout Kar Mountain &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;5km</li>
				<li>Kan Thar Yar Lake &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.5km</li>
				<li>Ocean Super Market &nbsp;&nbsp; &nbsp;&nbsp;1.5km</li>
			</ul>
		</div>
		<div class="col col-md-5">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.931111976039!2d95.14017861437918!3d22.128602085413018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f34bb2c8ceb%3A0x8427ddb70692c256!2z4YCf4YCt4YCv4YCQ4YCa4YC64YCY4YCe4YCx4YCs4YCE4YC64YC4!5e0!3m2!1smy!2smm!4v1551348690890" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
		<div class="row">
			<div class="col col-lg-12 col-md-12 textanimation">
				<p>"Welcome to make your travel experience a genuine pleasure"</p>
			</div>
			<div class="col col-md-6 offset-md-3">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/h11.jpg" class="d-block w-100" alt="images/h2.jpg">
						</div>
						<div class="carousel-item">
							<img src="images/h2.jpg" class="d-block w-100" alt="images/h5.jpg">
						</div>
						<div class="carousel-item">
							<img src="images/h5.jpg" class="d-block w-100" alt="images/h6.jpg">
						</div>
						<div class="carousel-item">
							<img src="images/h6.jpg" class="d-block w-100" alt="images/h12.jpg">
						</div>
						<div class="carousel-item">
							<img src="images/h12.jpg" class="d-block w-100" alt="images/h11.jpg">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
</div>
@endsection

