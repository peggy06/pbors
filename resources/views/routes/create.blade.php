@extends('layouts.app')

@section('content')
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Create a Route</h3>
    </div>
    <div class="registration-container">

        {!! Form::open(['url'=>route('client.routes.store')]) !!}
        <div class="registration-form-container bg--white one-column-layout">
            @include('partials.messages')
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                    <div class="material-input-container">
                        <input type="text" name="name" value="{{old('name')}}" class="material-input" required=required/>
                        <label class="material-label">Route Name</label>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                    <div class="material-input-container">
                        <input type="text" name="location" value="{{old('location')}}" class="material-input" required=required/>
                        <label class="material-label">Location</label>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                    <div class="material-input-container">
                        <input type="text" name="region" value="{{old('region')}}" class="material-input" required=required/>
                        <label class="material-label">Region</label>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="material-input-container text-right">
                        <a href="{{route('admin.company.index')}}" class="btn flat-btn flat-btn-primary ripple-closed">Cancel</a>
                        <input type="submit" class="btn flat-btn flat-btn-primary ripple-closed" value="Submit"/>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop