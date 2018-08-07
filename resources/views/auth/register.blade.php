@extends('layouts.layout_no_header')

@section('title')
    Register
@endsection()

@section('styles')
    <link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Register to IN+</h3>
            <p>Create account to see it in action.</p>
            {!! Form::open(['method' => 'post', 'url' => route('register'), 'class' => 'm-t']) !!}
            <div class="form-group">
                {!! Form::text('name', '', ['class' => $errors->has('name') ? 'form-control error' : 'form-control', 'placeholder' => 'Name']) !!}
                @if($errors->has('name'))
                    <label id="error" class="error">{{ $errors->first('name') }}</label>
                @endif
            </div>
            <div class="form-group">
                {!! Form::email('email', '', ['class' => $errors->has('email') ? 'form-control error' : 'form-control', 'placeholder' => 'Email']) !!}
                @if($errors->has('email'))
                    <label id="error" class="error">{{ $errors->first('email') }}</label>
                @endif
            </div>
            <div class="form-group">
                {!! Form::password('password', ['class' => $errors->has('password') ? 'form-control error' : 'form-control', 'placeholder' => 'Password']) !!}
                @if($errors->has('password'))
                    <label id="error" class="error">{{ $errors->first('password') }}</label>
                @endif
            </div>
            <div class="form-group">
                {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm', 'placeholder' => 'Password Confirmation']) !!}
                @if($errors->has('password_confirmation'))
                    <label id="error" class="error">{{ $errors->first('password_confirmation') }}</label>
                @endif
            </div>
            <div class="form-group">
                <div class="checkbox i-checks">
                    <label>{!! Form::checkbox('agree', 'agree') !!}<i></i> Agree the terms and policy </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

            <p class="text-muted text-center"><small>Already have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="{{ url('login') }}">Login</a>
            {!! Form::close() !!}
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- iCheck -->
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
@endsection