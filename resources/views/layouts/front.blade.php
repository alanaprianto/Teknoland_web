<!DOCTYPE html>
<html class="html" lang="en-US">

<head>
    <meta charset="utf-8"/>
    <title>Teknoland</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="{{asset('css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{asset('css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- THEME STYLES -->
    <link href="{{asset('css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/agency.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.css')}}"/>
    @yield('css')
</head>
<body id="body" data-spy="scroll" data-target=".header">

<header class="header navbar-fixed-top">
    <!-- Navbar -->
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container js_nav-item">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Teknoland</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
                <div class="logo">
                    <a class="logo-wrap" href="{{ url('/') }}">
                        <img class="logo-img logo-img-main" src="{{asset('images/logo.png')}}" alt="Teknoland logo">
                        <img class="logo-img logo-img-active" src="{{asset('images/logo-dark.png')}}"
                             alt="Teknoland logo">
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav navbar-nav-right">

                        <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover"
                                                            href="{{ url('/#about') }}">About</a></li>
                        <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{url('/#service')}}">Service</a>
                        </li>
                        <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{url('/#products')}}">Products</a>
                        </li>
                        <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{url('/#events')}}">Events</a>
                        </li>
                        <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/gallery') }}">Galery</a>
                        </li>
                        <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{url('/#team')}}">Team</a>
                        </li>
                        <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{url('/#contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->
</header>
<!--========== END HEADER ==========-->

@yield('content')



<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="{{asset('js/jquery-2.2.4.js')}}" type="text/javascript"></script>
<script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="vendor/jquery.easing.js" type="text/javascript"></script>
<script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
<script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
<script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
<script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
<script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -6.8785306, lng: 107.5904651},
            zoom: 4
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                infoWindow.setPosition(pos);
                infoWindow.setContent('Location found.');
                map.setCenter(pos);
            }, function () {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBtawZPqlODiSBzr2WaHBITKW1T5qZvaI&callback=initMap">
</script>


<!-- PAGE LEVEL SCRIPTS -->
<script src="js/layout.min.js" type="text/javascript"></script>
<script src="js/components/wow.min.js" type="text/javascript"></script>
<script src="js/components/swiper.min.js" type="text/javascript"></script>
<script src="js/components/masonry.min.js" type="text/javascript"></script>
<script src="js/components/google-map.min.js" type="text/javascript"></script>
@yield('scripts')

</head>
</body>
</html>
