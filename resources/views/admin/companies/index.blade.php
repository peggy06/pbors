@extends('layouts.app')

@section('content')
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Companies</h3>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-right" style="padding-bottom: 20px;">
            <a href="{{route('admin.company.create')}}" class="btn flat-btn flat-btn-primary ripple-closed">Add New Company</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            @include('partials.messages')
            <div class="material-block">
                <ul class="listholder">
                    @forelse($companies as $company)
                        <li class=list-holder-li>
                            <div class=list-details-holder>
                                <div class=list-title>{{$company->name}}</div>
                                <div class=list-details>{{$company->name}}</div>
                            </div>
                            <div class=modifyicon-holder>
                                <a href="{{route('admin.company.edit',$company->id)}}"><span class="mdi mdi-pencil edit-admin"></span></a>
                            </div>
                        </li>
                    @empty
                        <li class=list-holder-li>
                            <div class=list-details-holder>
                                <div class=list-title>No Companies found.</div>
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

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {


        });
    </script>

@stop