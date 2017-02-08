<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.gritter.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style1.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
    <script src="{{asset('js/Chart.js')}}"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
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
                        <a class="active" href="index.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-desktop"></i>
                            <span>UI Elements</span>
                        </a>
                        <ul class="sub">
                            <li><a href="general.html">General</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="panels.html">Panels</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cogs"></i>
                            <span>Components</span>
                        </a>
                        <ul class="sub">
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="todo_list.html">Todo List</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Extra Pages</span>
                        </a>
                        <ul class="sub">
                            <li><a href="blank.html">Blank Page</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="lock_screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-tasks"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="sub">
                            <li><a href="form_component.html">Form Components</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span>Data Tables</span>
                        </a>
                        <ul class="sub">
                            <li><a href="basic_table.html">Basic Table</a></li>
                            <li><a href="responsive_table.html">Responsive Table</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="sub">
                            <li><a href="morris.html">Morris</a></li>
                            <li><a href="chartjs.html">Chartjs</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            </div>
        @endif
    </aside>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="{{asset('/css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    @yield('css')
    @yield('content')
<!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.js') }}"></script>
    <script src="/js/moment-with-locales.min.js"></script>
    <script src="/js/general.js"></script>
    @yield('scripts')

</section>
</body>
</html>
