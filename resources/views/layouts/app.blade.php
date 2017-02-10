<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.gritter.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style1.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="{{asset('/css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title=""></div>
        </div>
        <!--logo start-->
        <a href="{{ url('/') }}" class="logo"><b>Teknoland</b></a>
        <!--logo end-->

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                @if (Auth::guest())
                    <li><a class="logout" href="{{ route('login') }}">login</a></li>
                    <li><a class="logout" href="{{ route('register') }}">register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="logout" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a class="logout" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>

    </header>
    <aside>
        @if (Auth::guest())
        @else
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered"><a href="profile.html"><img src="{{asset('images/man1-u1719-fr.jpg')}}"
                                                                    class="img-circle" width="60"></a></p>
                    <h5 class="centered">{{ Auth::user()->name }}</h5>

                    <li class="mt">
                        <a href="{{ url('home') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ url('/products') }}">
                            <i class="fa fa-desktop"></i>
                            <span>Product</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{ url('/teams') }}">
                            <i class="fa fa-user-circle"></i>
                            <span>Teams</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{ url('/events') }}">
                            <i class="fa fa-book"></i>
                            <span>Events</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{ url('/services') }}">
                            <i class="fa fa-book"></i>
                            <span>Services</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{ url('/messages') }}">
                            <i class="fa fa-inbox"></i>
                            <span>Messenges</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        @endif
    </aside>

    @yield('content')

    <script src="{{ asset('js/jquery-2.2.4.js')}}"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.js') }}"></script>
    <script src="{{asset('js/moment-with-locales.min.js')}}"></script>
    <script src="{{asset('js/general.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gritter-conf.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    @yield('scripts')
</section>
</body>
</html>
