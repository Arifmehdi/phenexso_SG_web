<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>@yield('title', $ws->name ?? 'Sungoods')</title>

    @yield('meta')

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}">
    
    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:300,400,500,600,700,800' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = "{{ asset('sungoods/js/webfont.js') }}";
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <link rel="stylesheet" type="text/css" href="{{ asset('sungoods/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('sungoods/vendor/animate/animate.min.css') }}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('sungoods/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('sungoods/vendor/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('sungoods/vendor/sticky-icon/stickyicon.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('sungoods/css/demo1.min.css') }}">
    
    @stack('css')
</head>

<body class="@yield('body_class', 'home')">

    <div class="page-wrapper">
        @include('website.layouts.sungoods_header')

        <main class="main">
            @yield('content')
        </main>
        <!-- End Main -->

        @include('website.layouts.sungoods_footer')
    </div>

    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="{{ route('home') }}" class="sticky-link active">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="{{ route('shop') }}" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="{{ route('wishlist.index') }}" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="{{ route('change.profile') }}" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <div class="header-search hs-toggle directory">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form action="{{ route('search') }}" method="GET" class="input-wrapper">
                <input type="text" class="form-control" name="parameter" placeholder="Search your keyword..."
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="{{ route('search') }}" method="GET" class="input-wrapper">
                <input type="text" class="form-control" name="parameter" placeholder="Search your keyword..."
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('shop') }}">Categories</a>
                    <ul>
                        @foreach($productCategories as $cat)
                        <li><a href="{{ route('productCategory', $cat->slug) }}">{{ $cat->name_en }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="{{ route('shop') }}">Products</a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}">About Us</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
            <!-- End of MobileMenu -->
        </div>
    </div>

    <!-- Plugins JS File -->
    <script src="{{ asset('sungoods/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sungoods/vendor/sticky/sticky.min.js') }}"></script>
    <script src="{{ asset('sungoods/vendor/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('sungoods/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('sungoods/vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>
    <script src="{{ asset('sungoods/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('sungoods/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('sungoods/js/main.min.js') }}"></script>

    @stack('js')
</body>

</html>
