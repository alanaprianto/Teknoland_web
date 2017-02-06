@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload File</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{url('/upload')}}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($post)
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                            @endif

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"
                                           value="{{$post ?  $post->title : ''}}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                <label for="desc" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea id="desc" class="form-control" name="desc"
                                              required>{{$post ?  $post->desc : ''}}</textarea>

                                    @if ($errors->has('desc'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <label for="file" class="col-md-4 control-label">File</label>

                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control" name="file[]" multiple>

                                    @if ($errors->has('file'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                    @endif
                                    @if($post)
                                        <input type="hidden" name="ids" class="ids">
                                        <ul class="list-unstyled">
                                            @foreach($post->attachments as $attachment)
                                                <li>
                                                    <a href="{{asset($attachment->location)}}">{{getFileName($attachment->location)}}</a><span
                                                            class="pull-right"><a class="remove-document"
                                                                                  href="javascript:;"
                                                                                  data-id="{{$attachment->id}}">x</a></span><span
                                                            class="clearfix"></span></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Upload
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
    <script type="text/javascript">
        $(document).ready(function () {
            var ids = [];
            $('.remove-document').click(function () {
                $this = $(this);
                var id = $this.data('id');
                ids.push(id);
                $('.ids').val(ids);
                $this.parent().parent().remove();
            });
        });
    </script>
@endsection