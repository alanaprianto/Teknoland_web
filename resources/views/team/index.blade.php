@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Our Team</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <a href="{{url('/team/create')}}" class="btn btn-primary">Tambah Team</a>
                        </div>
                        <div class="form-group">
                            @forelse($teams as $index => $team)
                                <div class="row">
                                    <h3>{{$index}}</h3>
                                    @foreach($team as $item)
                                        @set('socials', json_decode($item->social_media_account, true))
                                        <div class="col-sm-3">
                                            <div class="team-member">
                                                <img src="{{asset($item->photo)}}" class="img-responsive img-circle"
                                                     alt="">
                                                <h4>{{$item->name}} <sub><a href="{{url('/team/edit?id='.$item->id)}}">Edit</a></sub>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection