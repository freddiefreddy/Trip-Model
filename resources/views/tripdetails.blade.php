@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="section">
                    <div class="check">
                        <a href="{{ URL::previous() }}" class="btn btn-default" ><h1><</h1></a>
                        <b>Trip Details</b>
                    </div>
                    <div class="up">{{ $tripdetails->request_date}}
                        <a href="" class="btn btn-default float-right">
                            <i class="fa-money"></i>{{ $tripdetails->cost}}{{ $tripdetails->cost_unit}}
                        </a>
                    </div><br/>
                    <div class="up"><i class="fa fa-circle"></i> {{ $tripdetails->pickup_location}}
                        <a href="" class="btn btn-default float-right"> {{ $tripdetails->pickup_date}}</a>
                    </div><br/>
                    <div class="up"><i class="fa fa-circle" style="color:rgb(29, 238, 29);"></i>{{ $tripdetails->dropoff_location}}
                        <a href="" class="btn btn-default float-right">{{ $tripdetails->dropoff_date}}</a>
                    </div><br/>

                    <div class='clarify'>
                        <i class="fa fa-car">{{ $tripdetails->type}} </i>
                    </div>
                    <div class='clarify'>
                        <p> Distance {{ $tripdetails->distance}}{{ $tripdetails->distance_unit}}<p> 
                        <p>Duration {{ $tripdetails->duration}}{{ $tripdetails->duration_unit}}</p> 
                    </div>
                        
                    <div class='clarify'>
                        <i class="fa fa-user float-right"> {{$tripdetails->driver_name}}</i>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
