{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Simple Lightbox - Responsive touch friendly Image lightbox</title>
    <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link href='{{asset('css/simplelightbox.min.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('css/gallery.css')}}' rel='stylesheet' type='text/css'>
</head>
<body>

</body>
</html>--}}

@extends('layouts.front')
@section('css')
    <link href='{{asset('css/simplelightbox.min.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('css/gallery.css')}}' rel='stylesheet' type='text/css'>
@endsection
@section('content')
    <div class="container"  style=" Margin-top: 100px;">

        <div class="gallery">
            @foreach($files as $file)
                <a href="{{asset($file->location)}}"><img src="{{$file->location}}" alt="" title="{{$file->event->title}}"/></a>
            @endforeach
            {{--                <a href="images/image1.jpg" class="big"><img src="images/thumbs/thumb1.jpg" alt=""
                                                                         title="Beautiful Image"/></a>
                            <a href="images/image2.jpg"><img src="images/thumbs/thumb2.jpg" alt="" title=""/></a>
                            <a href="images/image3.jpg"><img src="images/thumbs/thumb3.jpg" alt="" title="Beautiful Image"/></a>
                            <a href="images/image4.jpg"><img src="images/thumbs/thumb4.jpg" alt="" title=""/></a>
                            <div class="clear"></div>

                            <a href="images/image5.jpg"><img src="images/thumbs/thumb5.jpg" alt="" title=""/></a>
                            <a href="images/image6.jpg"><img src="images/thumbs/thumb6.jpg" alt="" title=""/></a>
                            <a href="images/image7.jpg" class="big"><img src="images/thumbs/thumb7.jpg" alt="" title=""/></a>
                            <a href="images/image8.jpg"><img src="images/thumbs/thumb8.jpg" alt="" title=""/></a>
                            <div class="clear"></div>

                            <a href="images/image9.jpg" class="big"><img src="images/thumbs/thumb9.jpg" alt="" title=""/></a>
                            <a href="images/image10.jpg"><img src="images/thumbs/thumb10.jpg" alt="" title=""/></a>
                            <a href="images/image11.jpg"><img src="images/thumbs/thumb11.jpg" alt="" title=""/></a>
                            <a href="images/image12.jpg"><img src="images/thumbs/thumb12.jpg" alt="" title=""/></a>

                            <div class="clear"></div>--}}
        </div>
        <footer class="footer" style=" Margin-top: 100px;">
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6 ">
                        <img class="footer-logo" src="images/logo-dark.png" alt="Aitonepage Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700"</a> Teknolands </a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
    </div>
@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/simple-lightbox.min.js')}}"></script>
    <script>
        $(function () {
            var $gallery = $('.gallery a').simpleLightbox();
        });
    </script>
@endsection