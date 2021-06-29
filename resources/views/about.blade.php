<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Laravel</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/et-line-font.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			
			<a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
            </a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="{{ route('shop.index') }}" class="nav-link">Store</a></li>
				<li><a class="nav-link" href="{{ url('/about')}}">About</a></li>
                <li>@livewire('shop.cartnav')</li>
			</ul>
		</div>
	</div>
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>US</strong>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="{{ asset('img/kuli.jpeg') }}" class="img-responsive" alt="about img">
			</div>
			<div class="col-md-6 col-sm-12">
				<h3 class="bold">KuliTeam</h3>
				<h1 class="heading bold">Sekelompok Mahasiswa yang masih mencari jalan ninjanya masing-masing</h1>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">F.Y.I</a></li>
				</ul>

				<!-- tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="design">
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
						Quam sed architecto quas, consequuntur natus sapiente impedit.
						Debitis, porro illum. Deleniti quae tenetur fugit cum autem modi similique esse officiis suscipit.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<h1 class="heading bold">TALENTED TEAM</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="{{ asset('img/cahyo.jpg') }}" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Wahyu Syarif Hidayatullah</h4>
							<h3>a.k.a Sertificate Collector</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-instagram wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-linkedin wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.3s">
				<div class="team-wrapper">
					<img src="{{ asset('img/geri.jpg') }}" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>David Geri Pradipta Riadi</h4>
							<h3>a.k.a Peace Coffe Owner</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-instagram wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-linkedin wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="{{ asset('img/jayadi.jpg') }}" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Muhammad Jayadi</h4>
							<h3>a.k.a Juragan Ayam Potong</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-instagram wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-linkedin wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="{{ asset('img/lana.jpg') }}" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Tegar Iyar Lalana</h4>
							<h3>a.k.a SadBoy</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-instagram wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-linkedin wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
                
    <!-- Copyright -->
        <div class="text-center p-4 text-white" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">KuliStore</a>
        </div>
    <!-- Copyright -->
                <hr>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-linkedin wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-youtube wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-instagram wow fadeIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>


</footer>

<script src={{ asset('js/bootstrap.min.js') }}></script>
<script src={{ asset('js/jquery.js') }}></script>
<script src={{ asset('js/jquery.backstretch.js') }}></script>
<script src={{ asset('js/imagesloaded.min.js') }}></script>
<script src={{ asset('js/wow.min.js') }}></script>
<script src={{ asset('js/custom.js') }}></script>

</body>
</html>
