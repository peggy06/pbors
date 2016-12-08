@extends('layouts.app')

@section('schedules.classes')
    active
@stop
@section('css')

@stop
@section('content')

    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Quick Search</h3>
    </div>
    <div class="material-block">
        <div class="text-margin">
            {!! Form::open(['url'=>route("index"),'method'=>'GET']) !!}
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="material-input-container">
                        <input type="text" class="form-control material-input date" name="date" required=""
                               id="dpTravelDate" value="{{array_key_exists('date',$data)?$data['date']:''}}">
                        <label class="material-label">Travel Date</label>
                        <span class="bar"></span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">

                    <div class="material-input-container">

                        {!! Form::select('origin',$routes,array_key_exists('origin',$data)?$data['origin']:2,['class'=>'form-control material-input','id'=>'selectOrigin']) !!}
                        <label class="material-label">Origin</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="material-input-container">
                        {!! Form::select('destination',$routes,array_key_exists('destination',$data)?$data['destination']:4,['class'=>'form-control material-input','id'=>'selectDestination']) !!}
                        <label class="material-label">Destination</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="material-input-container">
                        <button class="btn flat-btn flat-btn-primary ripple-closed" id="btnSearch">Search</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    @if($error)
        <div class="material-block" id="divResults">
            <div class="container">
                <div class="bg--white one-column-layout shadow-depth-3">
                    <div class="form-confirmation-container text-center">
                        <img class="img-responsive" src="{{asset('img/sign-reset.png')}}"/>
                        <h3>{{$error['greeting']}}</h3>
                        <p>
                            {{$error['summary']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="material-block" id="divResults"
         style="display:@if(!$schedules->count())none
         @else
         @endif">
        @forelse($schedules as $companySchedule)
            @include('partials.company')
        @empty
        @endforelse
    </div>
    <div class="material-block">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @forelse($companies as $key => $company)

                    <li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$company->id==$companies->last()->id? "active":""}}">
                    </li>
                @empty
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
                @endforelse

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @forelse($companies as $company)
                    <div class="item {{$company->id==$companies->last()->id? "active":""}}">
                        <img class="img-responsive" src="{{asset(\Storage::url($company->logo_path))}}">
                    </div>
                @empty
                    <div class="item">
                        <img class="img-responsive" src="{{asset('img/ad1.png')}}">
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="{{asset('img/ad2.png')}}">
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="{{asset('img/ad3.png')}}">
                    </div>

                    <div class="item active">
                        <img class="img-responsive" src="{{asset('img/ad4.png')}}">
                    </div>
                @endforelse
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

@stop

@section('js')
    <script type="text/javascript">
        var options = {
            bg: '#1976D2',
            // left target blank for global nanobar
            target: document.getElementById('myDivId'),
            // id for new nanobar
            id: 'mynano'
        };

        var nanobar = new Nanobar(options);

        //move bar
        nanobar.go(30); // size bar 30%

        // Finish progress bar
        nanobar.go(100);
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            date = $('.date');
            date.datetimepicker({
                format: 'MM/DD/YYYY',

            });
            @if(!array_key_exists('date',$data))
            date.val("{{\Carbon\Carbon::today()->format('m/d/Y')}}").change();
            @endif
        });

    </script>

@stop