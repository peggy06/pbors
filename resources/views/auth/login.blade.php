@extends('layouts.app')

@section('css')
    <link href="{{asset('css/login.css')}}" rel="stylesheet"/>
@stop

@section('content')
    <div class="container">
        <div class="login-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-inner">

                        <form class="" role="form" method="POST" action="{{ url('/login') }}">
                            <div class="material-input-container">
                                <h3>Please login your Administrator Account.</h3>
                            </div>
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="material-input-container">
                                        <input id="email" type="email" class="form-control material-input" name="email" value="{{ old('email') }}" required autofocus>
                                        <span class="bar"></span>
                                        <label class="material-label">Email</label>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-xs-12">

                                    <div class="material-input-container">
                                        <input id="password" type="password" class="form-control material-input" name="password" required>
                                        <span class="bar"></span>
                                        <label class="material-label">Password</label>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="text-center">
                                <input type="submit" class="app-btn flat-btn flat-btn-primary btn-login" value="Login" />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
