@extends('layouts.front')
@section('content')
    <!--========== SLIDER ==========-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="container">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
        </div>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="{{asset('images/03.jpg')}}" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title">Teknoland Mitra Solusi</h1>
                            <p class="color-white">We are a company Solution to Information Technology
                                <br/>
                                your buisiness.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{asset('images/02.jpg')}}" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h2 class="carousel-title">Teknolands </h2>
                            <p class="color-white">Almost always, the creative dedicated minority has made the
                                information technology world better.
                                <br/>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- About -->
    <div id="about">
        <div class="content-lg container">
            <!-- Masonry Grid -->
            <div class="masonry-grid row">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 sm-margin-b-30">
                    <div class="margin-b-60">
                        <h2>Quality </h2>
                        <p>Kami menghargai loyalitas pelanggan kami sehingga kami berusaha untuk menawarkan layanan
                            kualitas dan keunggulan.</p>
                    </div>
                    <img class="full-width img-responsive wow fadeInUp" src="{{asset('images/500x500/01.jpg')}}"
                         alt="Portfolio Image"
                         data-wow-duration=".3" data-wow-delay=".2s">
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                    <div class="margin-b-60">
                        <img class="full-width img-responsive wow fadeInUp" src="{{asset('images/500x500/02.jpg')}}"
                             alt="Portfolio Image"
                             data-wow-duration=".3" data-wow-delay=".3s">
                    </div>
                    <h2>Komitment</h2>
                    <p> Kami berkomitmen untuk memberikan solusi yang unik dan nilai tambah untuk operasi dan logistik
                        perusahaan.</p>
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                    <div class="margin-t-60 margin-b-60">
                        <h2>Kepercayaan</h2>
                        <p>Teknoland komprehensif, dapat diandalkan dan berusaha untuk menginspirasi kepercayaan dengan
                            individu dan perusahaan yang berinteraksi</p>
                    </div>
                    <img class="full-width img-responsive wow fadeInUp" src="{{asset('images/500x500/03.jpg')}}"
                         alt="Portfolio Image"
                         data-wow-duration=".3" data-wow-delay=".4s">
                </div>
            </div>
            <!-- End Masonry Grid -->
        </div>


    </div>
    <!--// end row -->
    <!-- End About -->

    <!-- Service -->
    <div id="service">
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Services</h2>
                        <p>Services & Solutions,Informasi offers a wide portfolio of services, quality, commitment and
                            confidence that characterizes us. In this section you will find our offer. If you are </p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1 margin-b-2">
                    @forelse($services as $service)
                        @if($loop->index != 1)
                            <div class="col-sm-4 sm-margin-b-2">
                                <div class="service " data-height="height">
                                    <div class="service-info">
                                        <h3>{{$service->title}}</h3>
                                        <p class="margin-b-5">{{$service->desc}}</p>
                                    </div>
                                    <a href="#" class="content-wrapper-link"></a>
                                </div>
                            </div>
                        @else
                            <div class="col-sm-4 sm-margin-b-2">
                                <div class="service" data-height="height">

                                    <div class="service-info">
                                        <h3 class="color-white">{{$service->title}}</h3>
                                        <p class="color-white margin-b-5">{{$service->desc}}</p>
                                    </div>
                                    <a href="#" class="content-wrapper-link"></a>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="service" data-height="height">

                                <div class="service-info">
                                    <h3>Art Of Coding</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat
                                        dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="service bg-color-base" data-height="height">

                                <div class="service-info">
                                    <h3 class="color-white">Responsive Design</h3>
                                    <p class="color-white margin-b-5">Lorem ipsum dolor amet consectetur ut consequat
                                        siad
                                        esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service" data-height="height">

                                <div class="service-info">
                                    <h3>Feature Reach</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat
                                        dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- End Service -->

    <!-- Latest Products -->
    <div id="products">
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Latest Products</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore
                        magna
                        aliqua enim minim veniam exercitation</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                @forelse($products as $product)
                    @set('image', $product->attachments->first())
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="{{asset($image->location)}}"
                                 alt="Latest Products Image">
                        </div>
                        <h4><a href="{{url('/view/product/'.$product->id)}}">{{$product->title}}</a> <span
                                    class="text-uppercase margin-l-20">Rp. {{$product->price}}</span></h4>
                        <p>{!! substr(strip_tags($product->desc), 0, 40) . '...' !!}</p>
                        <a class="link" href="{{url('/view/product/'.$product->id)}}">Read More</a>
                    </div>
                @empty
                <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="{{asset('images/970x647/01.jpg')}}"
                                 alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Workspace</a> <span class="text-uppercase margin-l-20">Management</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                            magna ut
                            consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="{{asset('images/970x647/02.jpg')}}"
                                 alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Minimalism</a> <span class="text-uppercase margin-l-20">Developmeny</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                            magna ut
                            consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="{{asset('images/970x647/03.jpg')}}"
                                 alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Cleant Style</a> <span class="text-uppercase margin-l-20">Design</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                            magna ut
                            consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->
                @endforelse
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Latest Products -->

    <!-- Latest events -->
    <div id="events">
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Events</h2>
                    <p> Almost always, the creative dedicated minority has made the information technology world
                        better</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
            @forelse($events as $event)
                    @set('image', $event->attachments->first())
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="{{$image->location}}"
                                 alt="Latest Products Image">
                        </div>
                        <h4><a href="/view/event/{{$event->id}}">{{$event->title}}</a></h4>
                        <p>{!! substr(strip_tags($event->desc), 0, 40) . '...' !!}</p>
                        <a class="link" href="/view/event/{{$event->id}}">Read More</a>
                    </div>
            @empty
                <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="{{asset('images/970x647/01.jpg')}}"
                                 alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Workspace</a> <span class="text-uppercase margin-l-20">Management</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                            magna ut
                            consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="{{asset('images/970x647/02.jpg')}}"
                                 alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Minimalism</a> <span class="text-uppercase margin-l-20">Developmeny</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                            magna ut
                            consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="{{asset('images/970x647/03.jpg')}}"
                                 alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Cleant Style</a> <span class="text-uppercase margin-l-20">Design</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                            magna ut
                            consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->
                @endforelse
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Latest Products -->

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Our Amazing Team</h1>
                    <p class="large text-muted">The basic mind-set desired of people working at Teknoland Mitra Solusi,
                        focusing on specific principles for employees to bear in mind.</p>
                </div>
            </div>
            <div class="row">
                @forelse($teams as $team)
                    @set('socials', json_decode($team->social_media_account, true))
                    <div class="col-sm-3">
                        <div class="team-member">
                            <img src="{{asset($team->photo)}}" class="img-responsive img-circle" alt="">
                            <h4>{{$team->name}}</h4>
                            <p class="text-muted">{{$team->job_position}}</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="{{$socials[0]}}"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="{{$socials[1]}}"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="{{$socials[2]}}"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @empty
                    <div class="col-sm-3">
                        <div class="team-member">
                            <img src="images/man1-u581-fr.jpg" class="img-responsive img-circle" alt="">
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="team-member">
                            <img src="images/woman1-u742-fr.jpg" class="img-responsive img-circle" alt="">
                            <h4>Yuli </h4>
                            <p class="text-muted">Lead Marketer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="team-member">
                            <img src="images/woman2-u781-fr.jpg" class="img-responsive img-circle" alt="">
                            <h4>Diana Pertersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="team-member">
                            <img src="images/woman2-u781-fr.jpg" class="img-responsive img-circle" alt="">
                            <h4>Diana Pertersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">Services & Solutions,Informasi offers a wide portfolio of services, quality,
                    commitment and confidence that characterizes us. In this section you will find our offer. If you
                    are </p>
            </div>
        </div>
        </div>
    </section>
    <!-- Contact -->
    <div id="contact">
        <!-- Contact List -->
        <div class="section-seperator">
            <div class="content-lg container">
                <div class="row">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            {{ session('status') }}
                        </div>
                @endif
                <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h3><a href="#">Bandung</a> <span class="text-uppercase margin-l-20">Head Office</span></h3>
                        <p>JL Cipedes Tengah No 211 Sukajadi Bandung - Jawa barat, Indonesia
                        </p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="fa fa-phone"></i> (022) 56147780</li>
                            <li><i class="fa fa-envelope "></i> marketing@teknolands.com</li>
                        </ul>
                    </div>
                    <form method="post" action="{{url('/send/message')}}">
                        {{csrf_field()}}
                        <div class='col-sm-4'>
                            <div class='form-group'>
                                <label for='fname'>Name</label>
                                <input type='text' name='name' class='form-control' required/>
                            </div>

                            <div class='form-group'>
                                <label for='email'>Email</label>
                                <input type='email' name='email' class='form-control' required/>
                            </div>
                            <div class='form-group'>
                                <label for='subject'>Subject</label>
                                <input type='text' name='subject' class='form-control' required/>
                            </div>
                            <div class="form-group">
                                {!! Recaptcha::render() !!}
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='form-group'>
                                <label for='message'>Message</label>
                                <textarea class='form-control' name='message' rows='10' required></textarea>
                            </div>
                            <div class='text-right'>
                                <input type='submit' class='btn btn-primary' value='Submit'/>
                            </div>
                        </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Contact List -->

    <!-- Google Map -->
    <div id="map" class="map height-300"></div>
    </div>
    <!-- End Contact -->
    <!--========== END PAGE LAYOUT ==========-->
    <footer class="footer">
        <div class="content container">
            <div class="row">
                <div class="col-xs-6 ">
                    <img class="footer-logo" src="images/logo-dark.png" alt="Aitonepage Logo">
               </div>
                <div class="col-xs-6 text-right">
                    <p class="margin-b-0"><a class="fweight-700" href="{{ url('/login') }}"> Login </a></p>
                </div>

            </div>
            <!--// end row -->
        </div>
        <!-- End Copyright -->
    </footer>
@endsection