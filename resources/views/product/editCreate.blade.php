@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$product ? 'Ubah Produk' : 'Tambah Produk'}}</div>
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
                                    <textarea id="desc" class="form-control" name="desc"
                                              required>{{$product ?  $product->desc : ''}}</textarea>

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
                                    <input id="file" type="file" class="form-control" name="file[]" multiple>

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