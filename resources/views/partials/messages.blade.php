@if(Session::has('success'))
    <div class="row" id="divMessage">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="material-input-container bg-info" style="padding:24px">
                <span class="glyphicon glyphicon-info-sign alert-info" style="font-size:24px; top: 7px"></span>
                <span class="text-info">{{Session::get('success')}}</span>
            </div>
        </div>
    </div>
@endif
@if(Session::has('errors'))
    <div class="row" id="divMessage">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="material-input-container bg-danger" style="padding:24px">
                @if(is_string($errors))
                    <span class="glyphicon glyphicon-exclamation-sign alert-danger" style="font-size:24px top: 7px"></span>
                    <span class="text-danger">{{$errors}}</span>
                @else
                    @foreach($errors->all() as $error)
                        <ul>
                            <span class="glyphicon glyphicon-exclamation-sign alert-danger" style="font-size:24px top: 7px"></span>
                            <span class="text-danger">{{$error}}</span>
                        </ul>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endif