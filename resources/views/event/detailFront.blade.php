@extends('layouts.front')
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <style type="text/css">
        .carousel {
            background: #2f4357;
            margin-top: 20px;
        }

        .carousel .item img {
            margin: 0 auto; /* Align slide image horizontally center */
        }

        .bs-example {
            margin: 20px;
        }
    </style>

@endsection
@section('content')
    
    <!-- Page Content -->
    <div class="container"  style=" Margin-top: 100px; margin-left: 250px; margin-right: 300px; position: static;">
                <div class="row">
            <div class="col-lg-8" possion="center">
                <h1>Event Detail</h1>
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{$event->created_at}}</p>
                <hr>
                <div class="bs-example">
                    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            @foreach($event->attachments as $attachment)
                                <div class="@if($loop->index == 0) active @endif item">

                                    <img src="/{{$attachment->location}}" alt="First Slide">
                                    <div class="carousel-caption">
                                        <h3>{{$attachment->name}}</h3>
                                        <p></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

                <hr>

                <!-- Post Content -->
                <p class="lead">{{$event->title}}</p>
                <p>{!! $event->desc !!}</p>

                <hr>

            </div>
            <!-- /.row -->
            <!--========== FOOTER ==========-->
        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </div>
@endsection