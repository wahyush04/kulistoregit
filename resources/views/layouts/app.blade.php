<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireScripts
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('services.midtrans.clientKey') }}"></script>

    <!-- Fonts -->
    <link rel="icon" href="img/trolley.png" type="image" sizes="16x16">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-dark shadow-sm font-weight-bold" style="background-color: 	#3B3B3B">
            <div class="container">
                <a class="navbar-brand" style="color:#00c6d7" href="{{ url('/home') }}">
                    <img src="img/kulistore.png" style="width: 70px ; height = 50px"  alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a href="{{ route('shop.index') }}" class="nav-link">Store</a>
                        </li>
                        <li>                            
                            <a class="nav-link" href="{{ url('/about')}}">About</a>
                        </li>
                    
                    </ul>


                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @livewire('shop.cartnav')
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">Profile</a>

                                    @if (Auth::user()->email === 'admin@gmail.com')

                                        <a href="{{ route('admin.product') }}" class="dropdown-item">Products</a>
                                        <a class="dropdown-item"
                                            href="https://dashboard.sandbox.midtrans.com/transactions">Laporan </a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <br><br><br>
    <footer class="text-center text-lg-start text-muted" style="background-color: #444444">
        <!-- Section: Social media -->
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="text-white pt-3">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 mr-2"></i>KuliTech
                        </h6>
                        <p>
                            Kuli Tech adalah perkumpulan dari orang-orang kreatif yang siap untuk menciptakan dan
                            mengimplementasikan banyak hal baru yang inovatif.
                        </p>
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Bantuan
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Tagihan dan Top Up</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Customer Service</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Blog</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Discord</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Mataram, NTB, Indonesia</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            KuliTech@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +6281 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 6281 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4 text-white" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">KuliStore</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("image-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
    <script src={{ asset('js/wow.min.js') }}></script>
    <script>new WOW().init();</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>
