@extends('layouts.app')

@section('content')
    <div id="reservationConfirmation">
        <div class="bg--white one-column-layout shadow-depth-3">
            <div class="form-confirmation-container text-center">
                <img class="img-responsive" src="{{asset('img/sign-check.png')}}"/>
                <h3>Successfully confirmed reservation!</h3>
                <p>
                    Thanks for confirming your reservation. See you there!
                </p>
                <p>
                    You can now close this window.
                </p>
            </div>
        </div>
    </div>
@stop