@extends('layouts.app')
@section('content')
    <script type="text/javascript" href="{{asset('/js/general.js')}}"></script>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="panel">
                    <div class="panel-heading"><h3>List Post</h3></div>
                    <div class="panel-body">
                        <div class="action" style="margin-bottom: 10px">
                            <a href="{{url('/upload/create')}}" type="button" class="btn btn-primary">Buat Post</a>
                        </div>
                        <table class="table table-stripped" id="table-post" data-token="{{csrf_token()}}">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Desc</th>
                                <th>Tanggal Dibuat</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', '.btn-remove', function () {
                $this = $(this);
                var $id = $this.data('id');
                if (confirm('Apakah anda yakin akan menghapus postingan ini?')) {
                    var $form = $('<form />');
                    $form.attr('action', '/upload/delete');
                    $form.attr('method', 'post');
                    $form.css({
                        'display': 'none'
                    });
                    //csrf
                    var csrf = $('<input />');
                    csrf.attr('type', 'hidden');
                    csrf.attr('name', '_token');
                    csrf.val($('meta[name="csrf-token"]').attr('content'));
                    $form.append(csrf);
                    //id
                    var id = $('<input />');
                    id.attr('type', 'hidden');
                    id.attr('name', 'id');
                    id.val($id);
                    $form.append(id);
                    $('body').append($form);
                    $form.submit();
                }
            });
        });
    </script>
@endsection