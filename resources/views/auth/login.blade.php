@extends('layouts.layout_no_header')

@section('title')
    Login
@endsection()

@section('content')

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            {!! Form::open(['method' => 'post', 'url' => '/login', 'class' => 'm-t']) !!}
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
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
            {!! Form::close() !!}
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

@endsection