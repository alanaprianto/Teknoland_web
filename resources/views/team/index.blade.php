@extends('layouts.app')

@section('content')

    <section id="main-content">
        <section class="wrapper">
            <h3> Teams</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <div class="action" style="margin-bottom: 10px">
                            <a href="{{url('/team/create')}}" type="button" class="btn btn-primary">Tambah Team</a>
                        </div>
                        @forelse($teams as $index => $team)

                                <h4 class="mb" ><i class="fa fa-angle-right"></i>{{$index}}</h4>
                                @foreach($team as $item)
                                    @set('socials', json_decode($item->social_media_account, true))
                                    <div class="col-sm-3">
                                        <div class="team-member">
                                            <img src="{{asset($item->photo)}}" class="img-responsive img-circle"
                                                 alt="">
                                            <h4>{{$item->name}} <sub><a
                                                            href="{{url('/team/edit?id='.$item->id)}}">Edit</a></sub>
                                            </h4>
                                            <p class="text-muted">{{$item->job_position}}</p>
                                            <ul class="list-inline social-buttons">
                                                <li><a href="{{$socials[0]}}" target="_blank"><i
                                                                class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="{{$socials[1]}}" target="_blank"><i
                                                                class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li><a href="{{$socials[2]}}" target="_blank"><i
                                                                class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    
                                @endforeach
                            </div>
                        @empty
                            <div class="col-md-12">
                                <label class="text-info">Belum Ada Team. Silahkan klik tombol "Tambah Team"
                                    diatas.</label>
                            </div>
                        @endforelse
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->


        </section>
        <! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection
