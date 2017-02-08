@extends('layouts.app')
@section('css')
    <link href="{{asset('/js/Croppie/croppie.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$team ? 'Ubah Team' : 'Tambah Team'}}</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{url('/team/modify')}}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($team)
                                <input type="hidden" name="id" value="{{$team->id}}">
                            @endif
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nama</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ $team ? $team->name : old('name') }}" required>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('job_position') ? ' has-error' : '' }}">
                                <label for="job_position" class="col-md-4 control-label">Jabatan</label>

                                <div class="col-md-6">
                                    <select name="job_position" class="form-control">
                                        @foreach(getJobPosition() as $jobPosition)
                                            <option value="{{$jobPosition}}" {{$team && ($team->job_position == $jobPosition) ? 'selected' : ''}}>{{$jobPosition}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('job_position'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('job_position') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('social_media') ? ' has-error' : '' }}">
                                <label for="social_media" class="col-md-4 control-label">Sosial Media</label>

                                <div class="col-md-6">
                                    @if($team && $team->social_media_account)
                                        @forelse($team->social_media_account as $index => $item)
                                            @if($index == 0)
                                                <div class="row">
                                                    <div class="col-md-3"><span>Facebook</span></div>
                                                    <div class="col-md-9"><input id="social_media_account" type="text"
                                                                                 value="{{$item}}"
                                                                                 class="form-control"
                                                                                 name="social_media_account[]"
                                                                                 placeholder="exp : https://facebook.com/lans">
                                                    </div>
                                                </div>
                                            @endif
                                            @if($index == 1)
                                                <div class="row">
                                                    <div class="col-md-3"><span>Google + </span></div>
                                                    <div class="col-md-9"><input id="social_media_account" type="text"
                                                                                 value="{{$item}}"
                                                                                 class="form-control"
                                                                                 name="social_media_account[]"
                                                                                 placeholder="exp : https://plus.google.com/lans">
                                                    </div>
                                                </div>
                                            @endif
                                            @if($index == 2)
                                                <div class="row">
                                                    <div class="col-md-3"><span>Twitter</span></div>
                                                    <div class="col-md-9"><input id="social_media_account" type="text"
                                                                                 value="{{$item}}"
                                                                                 class="form-control"
                                                                                 name="social_media_account[]"
                                                                                 placeholder="exp : https://twitter.com/lans">
                                                    </div>
                                                </div>
                                            @endif
                                        @empty
                                            <div class="row">
                                                <div class="col-md-3"><span>Facebook</span></div>
                                                <div class="col-md-9"><input id="social_media_account" type="text"
                                                                             class="form-control"
                                                                             name="social_media_account[]"
                                                                             placeholder="exp : https://facebook.com/lans">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><span>Google + </span></div>
                                                <div class="col-md-9"><input id="social_media_account" type="text"
                                                                             class="form-control"
                                                                             name="social_media_account[]"
                                                                             placeholder="exp : https://plus.google.com/lans">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><span>Twitter</span></div>
                                                <div class="col-md-9"><input id="social_media_account" type="text"
                                                                             class="form-control"
                                                                             name="social_media_account[]"
                                                                             placeholder="exp : https://twitter.com/lans">
                                                </div>
                                            </div>
                                        @endforelse

                                    @else
                                        <div class="row">
                                            <div class="col-md-3"><span>Facebook</span></div>
                                            <div class="col-md-9"><input id="social_media_account" type="text"
                                                                         class="form-control"
                                                                         name="social_media_account[]"
                                                                         placeholder="exp : https://facebook.com/lans">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><span>Google + </span></div>
                                            <div class="col-md-9"><input id="social_media_account" type="text"
                                                                         class="form-control"
                                                                         name="social_media_account[]"
                                                                         placeholder="exp : https://plus.google.com/lans">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><span>Twitter</span></div>
                                            <div class="col-md-9"><input id="social_media_account" type="text"
                                                                         class="form-control"
                                                                         name="social_media_account[]"
                                                                         placeholder="exp : https://twitter.com/lans">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Upload Foto</label>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div id="upload-demo" style="margin-bottom: 10px">
                                                @if($team && $team->photo)
                                                    <img src="{{asset($team->photo)}}"
                                                         style="width: 200px; height: 200px">
                                                @endif
                                            </div>
                                            <input type="file" name="file_images" class="form-control edit" id="upload"
                                                   value="Choose a file"
                                                   accept="image/*">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="upload-result"
                                                    style="display: none; position: relative; top: 346px;">Crop
                                            </button>
                                        </div>
                                        <input type="hidden" name="picture" class="picture">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('/js/Croppie/croppie.js')}}"></script>
    <script src="{{asset('/js/exif.js')}}"></script>
    <script type="text/javascript">
        function crop() {
            $uploadCrop = $('#upload-demo').croppie({
                enableExif: true,
                showZoomer: true,
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'circle'
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });
        }

        function readFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.upload-demo').addClass('ready');
                    $uploadCrop.croppie('bind', {
                        url: e.target.result
                    });
                };

                reader.readAsDataURL(input.files[0]);
            }
            else {
                swal("Sorry - you're browser doesn't support the FileReader API");
            }
        }

        $(document).ready(function () {
            $('#upload').on('change', function () {
                readFile(this);
                $('#upload-demo').html('');
                crop();
                $('.upload-result').css('display', 'block');
                $('.btn-submit').prop('disabled', true);
            });

            $('.upload-result').on('click', function () {
                $this = $(this);
                $uploadCrop.croppie('result', {
                    type: 'canvas',
                    size: 'viewport',
                    format: 'png',
                    circle: true
                }).then(function (resp) {
                    var image = '<img src="' + resp + '" style="width: 200px; height: 200px">';
                    $this.css('display', 'none');
                    $('.btn-submit').prop('disabled', false);
                    $('#upload-demo').html('');
                    $('#upload-demo').append(image);
                    $('.picture').val(resp);
                });
            });
        });
    </script>
@endsection