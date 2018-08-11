@extends('layouts.layout')

@section('styles')

    <link href="{{ asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">

@endsection

@section('content')

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-5">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>画像投稿</h5>
                    </div>
                    <div class="ibox-content">
                        {{ Form::open(['method' => 'post', 'url' => route('gallery.store'), 'files' => true, 'class' => 'form-horizontal']) }}
                            <div class="form-control">
                                <div class="col-lg-10">
                                    {{ Form::file('image') }}
                                </div>
                            </div>
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-sm btn-white" type="submit">Submit</button>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <!-- iCheck -->
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

@endsection
