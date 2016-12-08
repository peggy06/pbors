@extends('layouts.app')

@section('content')
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Create a Company</h3>
    </div>
    <div class="registration-container">
        {!! Form::open(['url'=>route('admin.company.store'),'files'=>true]) !!}
        <div class="registration-form-container bg--white one-column-layout">
            @include('partials.messages')
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="material-input-container">
                        <input type="text" name="name" class="material-input" required=required/>
                        <label class="material-label">Company Name</label>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <span class="text-info" style="font-size: 12pt" id="file_name">Select file for the company logo</span>
                    <label class="btn btn-default btn-file">
                        Browse <input type="file" accept=".jpg" name="logo_path" id="file" style="display: none;"/>
                    </label>
                    <br/>
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

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {

            fileButton = $('#file');
            fileName = $('#file_name');
            fileButton.change(function () {
                fileValue = fileButton.val().split('\\').pop();
                fileValue = fileValue == "" ? "Select file for the company logo" : fileValue;
                fileName.text(fileValue);

            })


        });
    </script>

@stop