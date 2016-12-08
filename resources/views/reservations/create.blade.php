@extends('layouts.app')
@section('content')
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Reservation</h3>
    </div>
    <div class="row" id="divLoding" style="display:none;">
        <div class="container">
            <div class="loader"></div>
        </div>
    </div>

    @if(Session::has('success-reserved'))
        <div id="reservationConfirmation">
            <div class="bg--white one-column-layout shadow-depth-3">
                <div class="form-confirmation-container text-center">
                    <img class="img-responsive" src="{{asset('img/sign-check.png')}}"/>
                    <h3>Successfully reserved!</h3>
                    <p>
                        We have sent an email to <strong id='display-email'>{{Session::get('success-reserved')}}</strong>.
                    </p>
                    <p>
                        Open it up to view your registration info. Take note that your reservation is not valid until confirmed via email address.
                    </p>
                    <p>
                        You may now close this window.
                    </p>
                </div>
            </div>
        </div>
    @else
        <div class="row" id="reservationInformation" style="display:;">

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="material-block">
                    <div class="row">
                        <div class="material-input-container" style="padding-left: 10px;">
                            <h3>Schedule</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <img class="img-responsive" src="{{asset(\Storage::url($schedule->company->logo_path))}}" alt="{{$schedule->company->name}}"/>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                            <span id="txtFare" class="text-info" style="font-size:48pt;" data-fare="{{$schedule->fare}}">₱{{$schedule->fare}}</span>
                            <br/>
                            <span id="txtTravelDate" class="text-danger" style="font-size:16pt;">{{$data['date']}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input ty="text" id="txtScheduleID" class="material-input text-center" value="{{$schedule->id}}" readonly/>
                                <label class="material-label">Schedule ID</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="text" id="txtBusType" class="material-input text-left" value="{{$schedule->bus_type}}" readonly/>
                                <label class="material-label">Bus Type</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="text" id="txtSTime" class="material-input text-center" value="{{$schedule->departure}}" readonly/>
                                <label class="material-label">Departure</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="number" id="txtSeats" class="material-input text-right" value={{$schedule->seats_remaining}} readonly/>
                                <label class="material-label">Seats Available</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                {!! Form::open(['url'=>route('client.reservations.store')]) !!}
                <div class="material-block" style="display:;">
                    @include('partials.messages')

                    <input type="hidden" name="schedule_id" value="{{$schedule->id}}">
                    <input type="hidden" name="reservation_date" value="{{$data['date']}}">
                    <input type="hidden" name="total" id="total-fare" value="{{$schedule->fare}}">
                    <input type="hidden" name="fare" value="{{$schedule->fare}}">

                    <div class="row">
                        <div class="material-input-container" style="padding-left: 10px;">
                            <h3>Your Information</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="text" name="first_name" id="txtFirstname" class="material-input" value="{{old('first_name')}}" required/>
                                <label class="material-label">First Name</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="text" name="last_name" id="txtSurname" class="material-input" value="{{old('last_name')}}" required/>
                                <label class="material-label">Surname</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="email" name="email" id="Email" class="material-input" value="{{old('email')}}" required/>
                                <label class="material-label">Email Address</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="number" id="txtNoOfPerson" name="quantity" class="material-input text-right" style="" value="1" min="1" max="{{$schedule->seats_remaining}}"
                                       required/>
                                <label class="material-label">Number of Person</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <span>Total</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container text-right">
                                <span id="txtTotal" class="text-danger" style="font-size:24px;">₱{{$schedule->fare}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="material-input-container text-right">
                                <button class="btn flat-btn flat-btn-primary ripple-closed" id="btnReserve">Reserve</button>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    @endif
@stop

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            fareInput = $('#txtFare');
            fare = parseFloat($('#txtFare').data('fare'));
            txtTotal = $('#txtTotal');
            maxPersons = $('#txtSeats').val();
            $('#txtNoOfPerson').change(function () {
                personsInput = $(this);
                persons = personsInput.val();
                if (persons < 0 || persons == "") {
                    personsInput.val(1);
                }
                if (Number(persons) > Number(maxPersons)) {

                    personsInput.val(maxPersons);
                }
                total = fare * personsInput.val();
                $('#total-fare').val(total);
                txtTotal.text("₱" + total);
            });

        });
    </script>

@stop