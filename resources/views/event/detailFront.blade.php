@extends('layouts.front')
@section('css')
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
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
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
        </div>
        <!-- /.container -->
    </div>
@endsection