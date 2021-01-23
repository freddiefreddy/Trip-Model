@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Trip Search</h1>
                <form action="/searchresults"  method="get" role="search">
                    {{ csrf_field() }}
                    <div class="form-group">
                        {!! Form::label('name', 'Keyword') !!}
                        <input type="text" class="form-control" name="q" placeholder="Search users"><br/>
                        <input type="checkbox" name="vehicle" value="Bike">Include cancelled trip<br>
                    </div>

                    <div class="form-group">
                    
                        <div class="sub-entry">
                            {!! Form::label('name', 'Distance') !!}</br>
                            <input type="radio" name="optradio">Any<br>
                            <input type="radio" name="optradio" >Under 3 km<br>
                            <input type="radio" noxame="optradio" >3 to 8 km<br>
                            <input type="radio" name="optradio" >8 to 15 km<br>
                            <input type="radio" name="optradio" >More than 15 km<br>
                        </div>

                        <div class="sub-entry">
                            {!! Form::label('name', 'Time') !!}</br>
                            <input type="radio" name="optradio">Any<br>
                            <input type="radio" name="optradio">Under 5 min<br>
                            <input type="radio" name="optradio">5 to 10 min<br>
                            <input type="radio" name="optradio">10 to 20 min<br>
                            <input type="radio" name="optradio">More than 20 min<br>
                        </div>
                                 
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-primary">Search</button></div>
                    </div>
                    
                </form>
                <div class="col-md-8 col-md-offset-2" id="results"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection