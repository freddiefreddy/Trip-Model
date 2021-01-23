@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
                <div class="card">
                    <div class="section">
                        <div class= "check">
                            <a href="{{ URL::previous() }}" class="btn btn-default" ><h2><</h2></a>
                            <a href="" class="btn btn-default float-center" style="margin-left: -20px;"><h3>Trips( {{ $trips->count() }} )</h3> </a>
                        </div>
                        
                        @foreach ($trips as $trip)
                        <div class='trip'>
                        <div class="up">{{ $trip->pickup_date}}
                            <a href="" class="btn btn-default float-right">{{ $trip->cost}}{{ $trip->cost_unit}} </a>
                        </div><br/>
                        <div class="up">
                            {!! str_repeat('<i class="fa fa-star float-right" aria-hidden="true"></i>', $trip->driver_rating) !!}
                            {!! str_repeat('<i class="fa fa-star-o float-right" aria-hidden="true"></i>', 5 - $trip->driver_rating) !!}
                        </div><br/>
                        <div class="up">
                            <i class="fa fa-circle">{{ $trip->pickup_location}}</i>
                        </div><br/>
                        <div class="up">
                            <i class="fa fa-circle" style="color:rgb(29, 238, 29);">{{ $trip->dropoff_location}}</i>
                        </div><br/>
                        <div class="up">
                            <a href="" class="btn btn-default float-right">{{ $trip->status}}<i class="fa fa-check" style="color:rgb(29, 238, 29);"></i></a>
                        </div><br/>
                        </div>
                        @endforeach
                         
                    </div>
                        
                </div>
            
        </div>
    </div>
</div>
@endsection