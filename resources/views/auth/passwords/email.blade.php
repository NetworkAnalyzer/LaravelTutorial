@extends('layouts.layout_no_header')

@section('title')
    Forget Password
@endsection()

@section('content')

    <div class="passwordBox animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <div class="ibox-content">

                    <h2 class="font-bold">Forgot password</h2>

                    <p>
                        Enter your email address and your password will be reset and emailed to you.
                    </p>

                    <div class="row">

                        <div class="col-lg-12">
                            {!! Form::open(['method' => 'post', 'url' => route('password.email'), 'class' => 'm-t']) !!}
                            <div class="form-group">
                                {{ Form::email('email', old('email'), ['class' => $errors->has('email') ? 'form-control error' : 'form-control', 'id' => 'email', 'placeholder' => 'Email address']) }}
                                @if ($errors->has('email'))
                                    <label id="error" class="error">{{ $errors->first('email') }}</label>
                                @endif</div>

                            <button type="submit" class="btn btn-primary block full-width m-b">Send new password</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
                <small>© 2014-2015</small>
            </div>
        </div>
    </div>

@endsection