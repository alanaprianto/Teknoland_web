@extends('layouts.front')
@section('css')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/jquery.bsPhotoGallery.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/js/jquery.bsPhotoGallery.js"></script>
    </script>
    <script>
    $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
            "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
            "hasModal" : true,
            // "fullHeight" : false
        });
    });
    </script>

@endsection
@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-bottom:40px;">
            <h3 style="font-family:'Bree Serif', arial; font-weight:bold; font-size:30px;">
                <a style="text-decoration:none; color:#666;" ">Gallery </a>
            </h3>
            <p>Teknoland</p>
        </div>

        <ul class="row first">
            <li>
                <img alt="Rocking the night away"  src="http://demo.michaelsoriano.com/images/photodune-174908-rocking-the-night-away-xs.jpg">
                <div class="text">Consectetur adipiscing elit</div>
            </li>
            <li>
                <img alt="Yellow sign"  src="http://demo.michaelsoriano.com/images/photodune-287182-blah-blah-blah-yellow-road-sign-xs.jpg">
                <div class="text">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Colors"  src="http://demo.michaelsoriano.com/images/photodune-460760-colors-xs.jpg">
                <div class="text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</div>
            </li>
            <li>
                <img alt="Retro party"  src="http://demo.michaelsoriano.com/images/photodune-461673-retro-party-xs.jpg">
                <div class="text">Lorem, do eiusmod tempor incid Ut enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Technology soup"  src="http://demo.michaelsoriano.com/images/photodune-514834-touchscreen-technology-xs.jpg">
                <div class="text">Do eiusmod tempor</div>
            </li>
            <li>
                <img alt="Legal docs"  src="http://demo.michaelsoriano.com/images/photodune-916206-legal-xs.jpg" data-bsp-large-src="http://demo.michaelsoriano.com/images/photodune-916206-legal-large.jpg">
                <div class="text">Eiusmod tempor enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Nature shot"  src="http://demo.michaelsoriano.com/images/photodune-1062948-nature-xs.jpg">
                <div class="text">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Kid with camera" src="http://demo.michaelsoriano.com/images/photodune-1471528-insant-camera-kid-xs.jpg" data-bsp-large-src="http://demo.michaelsoriano.com/images/photodune-1471528-insant-camera-kid-large.jpg">
                <div class="text">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Relax and Chill" src="http://demo.michaelsoriano.com/images/photodune-2255072-relaxed-man-xs.jpg">
                <div class="text">Eiusmod tempor enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Cool colors" src="http://demo.michaelsoriano.com/images/photodune-2360379-colors-xs.jpg">
                <div class="text">Consectetur adipiscing elit</div>
            </li>
            <li>
                <img alt="Jump over"  src="http://demo.michaelsoriano.com/images/photodune-2360571-jump-xs.jpg">
                <div class="text">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Culture business" src="http://demo.michaelsoriano.com/images/photodune-2361384-culture-for-business-xs.jpg">
                <div class="text">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
            </li>

            <li>
                <img alt="Spaghetti bitch" src="http://demo.michaelsoriano.com/images/photodune-2441670-spaghetti-with-tuna-fish-and-parsley-s.jpg">
                <div class="text">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Budget this"  src="http://demo.michaelsoriano.com/images/photodune-2943363-budget-xs.jpg">
                <div class="text">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Street art"  src="http://demo.michaelsoriano.com/images/photodune-3444921-street-art-xs.jpg">
                <div class="text">Consectetur adipiscing elit, re magna aliqua. Ut enim ad minim veniam</div>
            </li>


            <li>
                <img alt="Insurance and stuff"  src="http://demo.michaelsoriano.com/images/photodune-3552322-insurance-xs.jpg">
                <div class="text">Ut enim ad minim veniam</div>
            </li>

            <li>
                <img alt="Food Explosion"  src="http://demo.michaelsoriano.com/images/photodune-3807845-food-s.jpg">
                <div class="text">Eiusmod tempor enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Office worker sad" src="http://demo.michaelsoriano.com/images/photodune-3835655-down-office-worker-xs.jpg">
                <div class="text">Ut enim ad minim veniam</div>
            </li>

            <li>
                <img alt="" src="http://demo.michaelsoriano.com/images/photodune-4619216-ui-control-knob-regulators-xs.jpg">
                <div class="text">Do eiusmod tempor</div>
            </li>

            <li>
                <img alt="Health" src="http://demo.michaelsoriano.com/images/photodune-5771958-health-xs.jpg">
                <div class="text">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam</div>
            </li>
            <li>
                <img  alt="Constant consecutuir" src="http://demo.michaelsoriano.com/images/photodune-268693-businesswoman-using-laptop-outdoors-xs.jpg"><!--no alt tag-->
                <div class="text">Consectetur adipiscing elit, re magna aliqua. Ut enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Search code" src="http://demo.michaelsoriano.com/images/photodune-352207-search-of-code-s.jpg">
                <div class="text">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
            </li>

            <li>
                <img alt="Pountac" src="http://demo.michaelsoriano.com/images/photodune-247190-secret-email-xs.jpg"><!--no alt tag, no text-->
                <div class="text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</div>
            </li>
            <li>
                <img alt="Budget again" src="http://demo.michaelsoriano.com/images/photodune-2943363-budget-xs.jpg">
                <div class="text">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Some alt tag" src="http://demo.michaelsoriano.com/images/photodune-3444921-street-art-xs.jpg"><!--no alt-->
                <div class="text">Consectetur adipiscing elit, re magna aliqua. Ut enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Insurance boy"  src="http://demo.michaelsoriano.com/images/photodune-3552322-insurance-xs.jpg">
                <div class="text">Ut enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Food service"  src="http://demo.michaelsoriano.com/images/photodune-3807845-food-s.jpg">
                <div class="text">Eiusmod tempor enim ad minim veniam</div>
            </li>
            <li>
                <img alt="Dopamine high"  src="http://demo.michaelsoriano.com/images/photodune-3835655-down-office-worker-xs.jpg">
                <div class="text">Ut enim ad minim veniam</div>
            </li>

        </ul>

            </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </div>
@endsection