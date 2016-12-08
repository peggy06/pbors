@extends('layouts.app')

@section('content')
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Create a Schedule</h3>
    </div>
    <div class="registration-container">

        {!! Form::open(['url'=>route('client.schedules.store')]) !!}
        <div class="registration-form-container bg--white one-column-layout">
            @include('partials.messages')
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="material-input-container">
                        {!! Form::select('frequency_id',$frequencies,old('freuency_id'),['class'=>'material-input','required']) !!}
                        <label class="material-label">Frequency</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="material-input-container">
                        {!! Form::select('bus_type',$busTypes,old('bus_type'),['class'=>'material-input','required']) !!}
                        <label class="material-label">Bus Type</label>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="material-input-container">
                        {!! Form::select('origin_id',$routes,old('origin_id'),['class'=>'material-input','required']) !!}
                        <label class="material-label">Origin</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="material-input-container">
                        {!! Form::select('destination_id',$routes,old('destination_id'),['class'=>'material-input','required']) !!}
                        <label class="material-label">Destination</label>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <div class="material-input-container">

                        {!! Form::time('departure',old('departure',"14:00"),['class'=>'material-input','required']) !!}
                        <label class="material-label">Departure Time</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="material-input-container">
                        {!! Form::number('seats',1,['class'=>'material-input','required','min'=>1,'max'=>50]) !!}
                        <label class="material-label">Seats</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="material-input-container">
                        {!! Form::number('fare',1,['class'=>'material-input','required','min'=>0.01,'step'=>0.01]) !!}
                        <label class="material-label">Fare(in ₱eso)</label>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="material-input-container text-right">
                        <a href="{{route('client.schedules.index')}}" class="btn flat-btn flat-btn-primary ripple-closed">Cancel</a>
                        <input type="submit" class="btn flat-btn flat-btn-primary ripple-closed" value="Submit"/>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop