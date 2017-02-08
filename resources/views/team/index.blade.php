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
                            @forelse($teams as $team)
                                <div class="col-md-3">
                                    <span>{{$team->name}}</span>
                                    <span>{{$team->job_position}}</span>
                                    <span><a href="{{url('/team/edit?id='.$team->id)}}">Edit</a></span>
                                    <span><img src="{{asset($team->photo)}}"></span>
                                    <span>{{$team->social_media_account}}</span>
                                </div>
                            @empty
                                <div class="col-md-3">
                                    satu
                                </div>
                                <div class="col-md-3">
                                    dua
                                </div>
                                <div class="col-md-3">
                                    tiga
                                </div>
                                <div class="col-md-3">
                                    empat
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