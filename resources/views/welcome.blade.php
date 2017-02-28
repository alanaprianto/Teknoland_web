@extends('layouts.front')
@section('content')
    <!--========== SLIDER ==========-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg3.jpeg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/slider/bg6.jpeg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Welcome to Teknoland Mitra Solusi</h2>
                    <p>Kami perusahaan yang bergerak dalam bidang konsultasi teknologi informasi baik hardware maupun software, prinsip kami memberikan pelayan terbaik dimana kepuasan klien merupakan hal yang utama bagi kami. Visi kami adalah menjadi perusahaan terkemuka di indonesia yang sangat mengedepan kan kepuasan klien kami.
                    </p>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

    <section id="">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nilai - nilai perusahaan</h2>
                <p class="text-center wow fadeInDown">"setiap teknologi yang anda lihat hari ini adalah sihir dimata nenek moyang anda."</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/girl2.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Kualitas</h4>
                            <p>Kami menghargai loyalitas klien kami sehingga kami berusaha untuk menawarkan layanan, kualitas dan keunggulan. Ini bagian dari budaya kita untuk memberikan solusi dengan tingkat kinerja yang tinggi dan rasa urgensi untuk melebihi hasil yang diharapkan.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Komitmen</h4>
                            <p>Pondasi dan kekuatan perusahaan kami adalah Komitmen untuk mempromosikan pertumbuhan klien kami. Kami berkomitmen untuk memberikan solusi yang unik dan nilai tambah untuk operasi dan logistik perusahaan.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Kepercayaan</h4>
                            <p>Keberhasilan Informasi ini tercermin dalam hubungan yang dapat dipercaya dengan pelanggan mereka. Kami adalah komprehensif, dapat diandalkan dan adil. Terus-menerus berusaha untuk menginspirasi kepercayaan dan keakraban dengan individu dan perusahaan yang berinteraksi dengan kita</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>TEKNOLAND</span> IS A CREATIVE AND INNOVATOR COMPANY</h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">"Jika Anda selalu fokus ke profit dan keuntungan, Anda akan mengurangi kualitas produk. Namun jika Anda fokus untuk menghasilkan produk yang luar biasa, maka profit dan keuntungan akan mengikuti."</p>
                <img class="img-responsive wow fadeIn" src="images/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
            </div>
        </div>
    </section>
    <!--========== SLIDER ==========-->
    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Services</h2>
                <p class="text-center wow fadeInDown">Teknologi adalah Karya terbesar kita yang kita hadiahkan bagi generasi mendatang.</p>
            </div>

            <div class="row">
                <div class="features">
                    @forelse($services as $index => $service)
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                @if ($index ==0)
                                <i class="fa fa-line-chart"></i>
                                    @elseif($index==1)
                                    <i class="fa fa-cubes"></i>
                                    @elseif($index==2)
                                    <i class="fa fa-pie-chart"></i>
                                @elseif($index==3)
                                    <i class="fa fa-bar-chart"></i>
                                @elseif($index==4)
                                    <i class="fa fa-language"></i>
                                @elseif($index==5)
                                    <i class="fa fa-bullseye"></i>
                                @elseif($index==6)
                                @endif
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{$service->title}}</h4>
                                <p>{{$service->desc}}</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    @empty

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{$service->title}}</h4>
                                <p>{{$services->desc}}</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-pie-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Konsultasi</h4>
                                <p>Bantuan konsultasi dan profesional dalam implementasi baru atau teknologi informasi proyek.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">iOS App</h4>
                                <p>Membangun dan mengembangan sistem informasi berbasin IOS.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-language"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Android App</h4>
                                <p>Membangun dan mengembangkan Sistem informasi berbasis android</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Pelatihan</h4>
                                <p>Pelatihan teknis terkait dengan Windows Server, Jaringan, aplikasi Desktop, HIT dan dukungan pengguna.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    @endforelse
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Works</h2>
                <p class="text-center wow fadeInDown"></p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">All Works</a></li>
                    <li><a href="#" data-filter=".creative">Creative</a></li>
                    <li><a href="#" data-filter=".corporate">Corporate</a></li>
                    <li><a href="#" data-filter=".portfolio">Portfolio</a></li>
                </ul><!--/#portfolio-filter-->
            </div>
            <div class="portfolio-items">
                @if($events)
                    @foreach($events as $index => $event)

                <div @if ($event->type == 'creative') class="portfolio-item creative portfolio" @elseif($event->type == 'corporate') class="portfolio-item corporate portfolio" @elseif($event->type == 'portfolio') class="portfolio-item  portfolio"  @endif>

                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{$event->attachments[0]->location}}" alt="">
                        <div class="portfolio-info">
                            <h3>{{$event->title}}</h3>
                            {!! substr(strip_tags($event->desc), 0, 40) . '...' !!}
                            <a class="preview" href="{{$event->attachments[0]->location}}" rel="prettyPhoto"><i class="fa fa-eye" style="margin-top: 10px"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                @endforeach
                @else
                <div class="portfolio-item corporate portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/02.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 2</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/03.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 3</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/04.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 4</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/05.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/06.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/07.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 7</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/08.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                @endif
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->


    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Us</h2>
                <p class="text-center wow fadeInDown">"Dengan teknologi kita telah menjangkau dunia yang lebih luas. Tapi masih sangat sangat sangat kecil jika dibandingkan luasnya semesta ini."</p>
            </div>

            <div class="media service-box wow fadeInRight">
                <div class="pull-left">
                    <i class="fa fa-line-chart"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Visi</h4>
                    <p>Menjadi inovator kelas dunia di bidang solusi dan teknologi</p>
                </div>
            </div>

            <div class="media service-box wow fadeInRight">
                <div class="pull-left">
                    <i class="fa fa-cubes"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Misi</h4>
                    <p>Misi kami adalah untuk menyediakan pendekatan pribadi dan pro-aktif untuk menjaga dan meningkatkan
                        infrastruktur informasi technology, VOIP solusi, dan persyaratan ISP perusahaan-perusahaan menengah dan atas.
                        'Sebagai pemasok layanan ICT dan infrastruktur yang lengkap kami tetap berkomitmen untuk memberikan solusi ICT yang membuatnya sederhana</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 wow fadeInRight">
                    <h3 class="column-title">Sekilas Perusahaan</h3>
                    <p>Teknoland Mitra solusi didirikan pada 2016 untuk memberikan solusi teknologi informasi untuk usaha kecil menengah dan atas. Misi kami dari hari pertama telah memupuk hubungan profesional dengan klien kami untuk memberikan solusi teknologi informasi yang efektif dan dapat diandalkan untuk kebutuhan mereka. Tim di solusi teknologi dilengkapi dengan skillset sangat maju yang dikembangkan selama dekade pengalaman tidak hanya di bidang teknologi informasi, tetapi juga dalam proses bisnis di berbagai sektor industri. Pengalaman bisnis ini membuat kita untuk menawarkan solusi yang menjanjikan efisiensi operasional yang lebih besar, peningkatan produktivitas dan penghematan biaya untuk setiap klien kami, terlepas dari industri mereka.
                        Sebagai perusahaan teknologi-intensif didirikan, kami bangga memberikan paket komprehensif. solusi terdiri dari infrastruktur konsultasi, pada/offsite layanan, perangkat lunak custom dan pengembangan web, perangkat lunak web aplikasi pengujian dan perusahaan arsitektur konsultasi. Tim kami secara konsisten memberikan negara-of-the-art solusi dalam berbagai bidang, termasuk, namun tidak terbatas pada, solusi bisnis yang terintegrasi, aplikasi sistem, pengembangan produk, aplikasi Internet/Intranet dan komunikasi & Layanan pengelolaan jaringan</p>


                </div>
            </div>
        </div>
    </section><!--/#about-->


    <section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Process</h2>
                <p class="text-center wow fadeInDown">"bagi mata manusia 1000 tahun lalu, kita semua yang hidup dengan bantuan teknologi ini adalah seorang penyihir".</p>
            </div>

            <div class="row text-center">
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="icon-circle">
                            <span>1</span>
                            <i class="fa fa-coffee fa-2x" style="margin-top: 25px"></i>
                        </div>
                        <h3>MEET</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="icon-circle">
                            <span>2</span>
                            <i class="fa fa-bullhorn fa-2x " style="margin-top: 25px"></i>
                        </div>
                        <h3>PLAN</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="icon-circle">
                            <span>3</span>
                            <i class="fa fa-image fa-2x" style="margin-top: 25px"></i>
                        </div>
                        <h3>DESIGN</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="icon-circle">
                            <span>4</span>
                            <i class="fa fa-heart fa-2x" style="margin-top: 25px"></i>
                        </div>
                        <h3>DEVELOP</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div class="icon-circle">
                            <span>5</span>
                            <i class="fa fa-shopping-cart fa-2x" style="margin-top: 25px"></i>
                        </div>
                        <h3>TESTING</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div class="icon-circle">
                            <span>6</span>
                            <i class="fa fa-space-shuttle fa-2x" style="margin-top: 25px"></i>
                        </div>
                        <h3>LAUNCH</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#work-process-->

        <!-- Team Section -->
            <section id="meet-team">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title text-center wow fadeInDown">Meet The Team</h2>
                        <p class="text-center wow fadeInDown">"Kualitas itu lebih penting daripada kuantitas. Satu home run jauh lebih baik daripada dua doubles."</p>
                    </div>

                    <div class="row">
                        @if($teams)
                            @foreach($teams as $index => $team)
                                @set('socials', json_decode($team->social_media_account, true))
                        <div class="col-sm-6 col-md-3">
                            <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                                <div class="team-img">
                                    <img class="img-responsive" src="{{asset($team->photo)}}" style="margin-left: 30px; margin-top: 10px" alt="">
                                </div>
                                <div class="team-info">
                                    <h3>{{$team->name}}</h3>
                                    <span>{{$team->job_position}}</span>
                                </div>

                                <p>{{$team->desc}}</p>

                                <ul class="social-icons">
                                    <li><a href="{{$socials[0]}}"><i class="fa fa-facebook" style="margin-top: 10px"></i></a></li>
                                    <li><a href="{{$socials[2]}}"><i class="fa fa-twitter" style="margin-top: 10px"></i></a></li>
                                    <li><a href="{{$socials[1]}}"><i class="fa fa-google-plus" style="margin-top: 10px"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" style="margin-top: 10px"></i></a></li>
                                </ul>
                            </div>
                        </div>
                            @endforeach
                        @else
                        <div class="col-sm-6 col-md-3">
                            <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                                <div class="team-img">
                                    <img class="img-responsive" src="images/team/avatar.png" alt="">
                                </div>
                                <div class="team-info">
                                    <h3>Erwien Kurniawan</h3>
                                    <span>Co-Founder</span>
                                </div>
                                <p>Semua yang besar berawal dari hal yang kecil</p>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                                <div class="team-img">
                                    <img class="img-responsive" src="images/team/avatar.png" alt="">
                                </div>
                                <div class="team-info">
                                    <h3>Wawan Setiawan</h3>
                                    <span>Project Manager</span>
                                </div>
                                <p>We Believe in being Innovator</p><br>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                                <div class="team-img">
                                    <img class="img-responsive" src="images/team/avatar.png" alt="">
                                </div>
                                <div class="team-info">
                                    <h3>Fadhil Ismail</h3>
                                    <span>Senior Programer</span>
                                </div>
                                <p>We are not a pirate, we are Innovator</p><br>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="divider"></div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="column-title">Our Skills</h3>
                            <strong>GRAPHIC DESIGN</strong>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" data-width="85">85%</div>
                            </div>
                            <strong>WEB DESIGN</strong>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" data-width="70">70%</div>
                            </div>
                            <strong>NETWORKING</strong>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                            </div>
                            <strong>RESEARCH AND DEVELOPMENT</strong>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" data-width="80">80%</div>
                            </div>
                        </div>
                    </div>
                </div>

            </section><!--/#meet-team-->
    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Fun Facts</h2>
                <p class="text-center wow fadeInDown">"Orang-orang berpikir bahwa fokus itu berarti berkata ya ke hal yang harus Anda kerjakan. Namun sebenarnya sama sekali tidak tepat. Itu berarti berkata tidak ke ratusan ide hebat lainnya. Anda harus memilihnya hati-hati."</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="0" data-duration="1000"></div>
                        <strong>CUPS OF COFFEE CONSUMED</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="0" data-duration="1000"></div>
                        <strong>CLIENT WORKED WITH</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="0" data-duration="1000"></div>
                        <strong>PROJECT COMPLETED</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="0" data-duration="1000"></div>
                        <strong>QUESTIONS ANSWERED</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#animated-number-->



    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Get in Touch</h2>
                <p class="text-center wow fadeInDown">"Jika Anda tidak mencintai sesuatu, maka Anda tidak akan mengambil upaya lebih, bekerja di hari libur, atau menantang status quo sejauh mungkin."</p>
            </div>
        </div>
    </section><!--/#get-in-touch-->
    <!-- Contact -->
            <section id="contact">
                <div id="google-map" style="height:650px" data-latitude="-6.878963" data-longitude="107.590444"></div>
                <div class="container-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-8">
                                <div class="contact-form">
                                    <h3>Contact Info</h3>

                                    <address>
                                        <strong>Teknoland, Inc.</strong><br>
                                        JL Cipedes Tengah No 211 Sukajadi Bandung - Jawa barat, Indonesia <br>
                                        <br>
                                        <abbr title="Phone">P:</abbr> (022) 56147780
                                        <abbr title="Email">E:</abbr> marketing@teknolands.com
                                    </address>
                                    @if (session('status'))
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form  method="post" action="{{url('/send/message')}}">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            {!! Recaptcha::render() !!}
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#bottom-->

            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            &copy; 2016 Teknoland Mitra Solusi
                        </div>
                        <div class="col-sm-6">
                            <ul class="social-icons">
                                <li class="margin-b-0"><a class="fweight-700" href="{{ url('/login') }}"> Login </a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer><!--/#footer-->


@endsection