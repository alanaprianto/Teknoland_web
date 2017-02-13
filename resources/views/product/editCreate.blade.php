@extends('layouts.app')

@section('content')
    <script type="text/javascript" href="{{asset('/js/general.js')}}"></script>
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Products <i class="fa fa-angle-right"></i> {{$product ? "Edit" : "Create"}}</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{url('/product/modify')}}"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @if($product)
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                @endif

                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="col-md-4 control-label">Title</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control" name="title"
                                               value="{{$product ?  $product->title : ''}}" required autofocus>

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
                                        <textarea name="desc">{{$product ?  $product->desc : ''}}</textarea>

                                        @if ($errors->has('desc'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                    <label for="stock" class="col-md-4 control-label">Jumlah</label>

                                    <div class="col-md-6">
                                        <input id="stock" type="text" class="form-control" name="stock"
                                               value="{{$product ?  $product->stock : ''}}" required>

                                        @if ($errors->has('stock'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                    <label for="price" class="col-md-4 control-label">Harga</label>

                                    <div class="col-md-6">
                                        <input id="price" type="text" class="form-control" name="price"
                                               value="{{$product ?  $product->price : ''}}" required>

                                        @if ($errors->has('price'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                    <label for="file" class="col-md-4 control-label">Foto / Gambar</label>

                                    <div class="col-md-6">
                                        <input id="file" type="file" class="form-control" accept="image/*" name="file[]"
                                               multiple>

                                        @if ($errors->has('file'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                        @endif
                                        @if($product)
                                            <input type="hidden" name="ids" class="ids">
                                            <ul class="list-unstyled">
                                                @foreach($product->attachments as $attachment)
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
        </section>
    </section>
@endsection
@section('scripts')
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            height: 200,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
            ],
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
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