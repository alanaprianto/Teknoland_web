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

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
    .error-template {padding: 40px 15px;text-align: center;}
    .error-actions {margin-top:15px;margin-bottom:15px;}
    .error-actions .btn { margin-right:10px; }
</style>

<div class="container">
    <div class="row">
        <div class="error-template">
            <img src="{{asset('images/stres.png')}}" style="position: absolute; left: 24%; height: 200px"  >
            <h1>Oops!</h1>
            <h2>500 error</h2>
            <div class="error-details">
                Sorry, an error has occured, Requested page not found!<br>

            </div>
            <div class="error-actions">
                <a href="{{ url('/') }}" class="btn btn-primary">
                    <i class="icon-home icon-white"></i> Take Me Home </a>
            </div>
        </div>
    </div>
</div>500 error