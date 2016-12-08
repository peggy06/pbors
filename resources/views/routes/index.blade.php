@extends('layouts.app')

@section('content')
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Routes</h3>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-right" style="padding-bottom: 20px;">
            <a href="{{route('client.routes.create')}}" class="btn flat-btn flat-btn-primary ripple-closed">Add New Route</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            @include('partials.messages')
            <div class="material-block">
                <ul class="listholder" style="overflow: auto;">
                    @forelse($routes as $route)
                        <li class=list-holder-li>
                            <div class=list-details-holder>
                                <div class=list-title>{{$route->name}}</div>
                                <div class=list-details>{{$route->name}}</div>
                            </div>
                            <div class=modifyicon-holder>
                                <a href="{{route('client.routes.edit',['route'=>$route->id])}}"><span class="mdi mdi-pencil edit-admin"></span></a>
                            </div>
                        </li>
                    @empty
                        <li class=list-holder-li>
                            <div class=list-details-holder>
                                <div class=list-title>No Routes found.</div>
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