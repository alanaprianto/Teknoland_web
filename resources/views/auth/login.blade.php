@extends('layouts.app')

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

@section('content')
    <div id="login-page">
        <div class="container">
            <form class="form-login" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">

                    <input type="email" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}"
                           placeholder="E-Mail Address" autofocus name="email">

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <br>
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }}"
                           placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <label class="checkbox">
                <span class="pull-right"><a data-toggle="modal" class="btn btn-link"
                                            href="{{ route('password.request') }}"> Forgot Password?</a>
                 </span>
                    </label>
                    <button class="btn btn-theme btn-block" type="submit" class="btn btn-primary"> SIGN IN</button>
                    <div class="registration">
                        Don't have an account yet?<br/>
                        <a class="" href="{{ route('register') }}">
                            Create an account
                        </a>
                    </div>
            </form>
        </div>
    </div>

@endsection
