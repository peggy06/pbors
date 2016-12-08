@extends('layouts.app')

@section('content')
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Reservation</h3>
    </div>
    <div class="row" id="reservationInformation">
        <div class="col-md-12">
            {!! Form::open(['url'=>route('client.password.store')]) !!}
            <div class="material-block">
                @include('partials.messages')

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="material-input-container">
                            <input type="password" name="password" id="txtFirstname" class="material-input" value="{{old('password')}}" required/>
                            <label class="material-label">New Password</label>
                        </div>
                        <div class="material-input-container">
                            <input type="password" name="password_confirmation" id="txtSurname" class="material-input" value="{{old('password_confirmation')}}" required/>
                            <label class="material-label">Retype New Password</label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="material-input-container text-right">
                            <button class="btn btn-block flat-btn flat-btn-primary ripple-closed" id="btnReserve">Change Password</button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop