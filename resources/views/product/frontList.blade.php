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
                <h1>Product List</h1>
                @forelse($products as $index => $product)
                    <p><span class="glyphicon glyphicon-time"></span> Posted on {{$product->created_at}}</p>
                    <hr>
                    <div class="bs-example">
                        <div id="myCarousel-{{$index}}" class="carousel slide" data-interval="3000"
                             data-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                @foreach($product->attachments as $indexAttachment => $attachment)
                                    <li data-target="#myCarousel-{{$index}}" data-slide-to="{{$indexAttachment}}"
                                        @if($loop->index ==0) class="active" @endif></li>
                                @endforeach
                            </ol>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                @foreach($product->attachments as $attachment)
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
                            <a class="carousel-control left" href="#myCarousel-{{$index}}" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="carousel-control right" href="#myCarousel-{{$index}}" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <!-- Post Content -->
                    <p class="lead"><a href="{{url('/view/product/'.$product->id)}}">{{$product->title}}</a></p>
                @empty
                @endforelse

                {{$products->links()}}
            </div>
        </div>
        <!-- /.container -->
    </div>
@endsection