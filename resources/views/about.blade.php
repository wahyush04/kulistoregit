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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/et-line-font.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			
			<a class="navbar-brand" style="color:#00c6d7" href="{{ url('/home') }}">
                    <img src="img/kulistore.png" style="width: 70px ; height = 50px"  alt="">
            </a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="{{ route('shop.index') }}" class="nav-link">Store</a></li>
				<li><a class="nav-link" href="{{ url('/about')}}">About</a></li>
			</ul>

			<ul class="nav navbar-right">
				@if (Auth::user())
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                </a></li>
				@endif

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
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
					<strong>KuliTech;</strong>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="{{ asset('img/kulistore.png') }}" class="img-responsive" alt="about img">
			</div>
			<div class="col-md-6 col-sm-12">
				<h3 class="bold">/Kuli•Tech/</h3>
				<h1 class="heading bold">A group of open minded people that love to programming and gaming</h1>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">Why KuliTech?</a></li>
				</ul>

				<!-- tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="design">
						<p>"Kuli" itself means a group of people that build something depending on their physical skills. its taken from Indonesian language.
						While Tech, means everything about technologies. Technologies is intelligence.
						So basically, KuliTech is a group of people that using not just a physical but also an intelligence,to build a technologies. As simple as that.</p>
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
			<div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="{{ asset('img/cahyo.jpg') }}" class="img-responsive" style="height:445px;" alt="team img">
						<div class="team-des">
							<h4>Wahyu Syarif Hidayatullah</h4>
							<h3>1810530134</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="https://www.facebook.com/wahyush04" class="fab fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="https://www.instagram.com/wahyush04/" class="fab fa-instagram wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="https://www.linkedin.com/in/wahyu-syarif-232a5b115/" class="fab fa-linkedin wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="{{ asset('img/geri.jpeg') }}" class="img-responsive" style="height:445px;" alt="team img">
						<div class="team-des">
							<h4>David Geri Pradipta Riadi</h4>
							<h3>1810530133</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="https://www.facebook.com/DavidakaMaJesTY" class="fab fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="https://www.instagram.com/davidgerii/" class="fab fa-instagram wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fab fa-linkedin wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
		</div>
		<hr>
		<div>
			<div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="1s">
				<div class="team-wrapper">
					<img src="{{ asset('img/jayadi.jpg') }}" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Muhammad Jayadi</h4>
							<h3>1810530119</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fab fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="https://www.instagram.com/jayadi662_/" class="fab fa-instagram wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="https://www.linkedin.com/in/muhammad-jayadi-1223401ba/" class="fab fa-linkedin wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="1s">
				<div class="team-wrapper">
					<img src="{{ asset('img/lana.jpg') }}" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Tegar Iyar Lalana</h4>
							<h3>1810530154</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="https://www.facebook.com/profile.php?id=100008761148577" class="fab fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="https://www.instagram.com/lalanategar/" class="fab fa-instagram wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="https://www.linkedin.com/in/lalana-tegar-3b5241196/" class="fab fa-linkedin wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="1s">
				<div class="team-wrapper">
					<img src="{{ asset('img/ali.jpg') }}" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Muhammad Saleh Hambali</h4>
							<h3>1810530143</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fab fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fab fa-instagram wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fab fa-linkedin wow fadeIn" data-wow-delay="0.9s"></a></li>
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
					<li><a href="#" class="fab fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fab fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fab fa-linkedin wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fab fa-youtube wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fab fa-instagram wow fadeIn" data-wow-delay="0.9s"></a></li>
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
