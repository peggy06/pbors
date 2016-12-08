@extends('layouts.app')

@section('content')
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Schedules</h3>
    </div>
    @if(Auth::user()->company)
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-right" style="padding-bottom: 20px;">
                <a href="{{route('client.schedules.create')}}" class="btn flat-btn flat-btn-primary ripple-closed">Add New Schedule</a>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            @include('partials.messages')
            <div class="material-block">
                <ul class="listholder" style="overflow: auto;">
                    @forelse($schedules as $schedule)
                        <li class=list-holder-li>
                            <div class=list-details-holder>
                                <div class=list-title>{{$schedule->bus_type}}</div>
                                <div class=list-details>{{$schedule->itinerary}}</div>
                                <div class=list-details>{{$schedule->frequency_name}}</div>
                                <div class=list-details>₱{{$schedule->fare}}</div>
                                <div class=list-details>Seats :{{$schedule->seats}}</div>
                            </div>
                            <div class=modifyicon-holder>
                                <a href="{{route('client.schedules.export',['schedule'=>$schedule->id])}}"><span><i class="glyphicon glyphicon-download-alt"></i></span></a>
                                <a href="{{route('client.schedules.edit',['schedule'=>$schedule->id])}}"><span class="mdi mdi-pencil edit-admin"></span></a>
                            </div>
                        </li>
                    @empty
                        <li class=list-holder-li>
                            <div class=list-details-holder>
                                <div class=list-title>No Schedules found.</div>
                            </div>
                            <div class=modifyicon-holder>

                            </div>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

@stop