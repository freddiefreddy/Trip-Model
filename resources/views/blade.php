@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Trip Search</h1>
                    <!-- Trips::Where -->
                    {!! Form::open(array('method'=>'POST','url'=>'/searchresults','id'=>'formid'))!!} 
                    <div class="form-group">
                        {!! Form::label('name', 'Keyword') !!}
                        <input type="text" class="form-control" name="q" placeholder="Search users"><br/>
                    </div>
                    @foreach($trips as $trip)
                    <div class="form-group">
                        <input type="checkbox" name="vehicle" value="{{$trip->status == 'CANCELLED' ? 'checked' : ''}}">Include cancelled trip<br>   
                    </div>
                    <div class="form-group">
                        <div class="sub-entry">
                            {!! Form::label('name', 'Distance') !!}
                            <input type=radio name="Gender" value="Male" {{ $object->gender == 'Male' ? 'checked' : ''}}>Male</option>
                            <input type=radio name="Gender" value="Female" {{ $object->gender == 'Female' ? 'checked' : ''}}>Female</option>
                            <input type="radio" name="optradio" value= "{{$trip->distance ? 'checked' : ''}}">Any
                            <input type="radio" name="optradio" value= "{{$trip->distance < '3' ? 'checked' : '' }}" >Under 3 km
                            <input type="radio" name="optradio" value= "{{($trip->distance  == '3' && $trip->distance  =< '8') ? 'checked' : '' }}" >3 to 8 km
                            <input type="radio" name="optradio" value= "{{($trip->distance  == '8' && $trip->distance  =< '15') ? 'checked' : '' }}" >8 to 15 km
                            <input type="radio" name="optradio" value= "{{$trip->distance > '15' ? 'checked' : '' }}" >More than 15 km
                        </div>

                        <div class="sub-entry">
                            {!! Form::label('name', 'Time') !!}</br>
                            <input type="radio" name="optradio" value= "{{$trip->distance ? 'checked' : ''}}">Any<br/>
                            <input type="radio" name="optradio" value= "{{$trip->distance < '5' ? 'checked' : '' }}">Under 5 min<br/>
                            <input type="radio" name="optradio" value= "{{($trip->distance  == '5' && $trip->distance  =< '10') ? 'checked' : '' }}" >5 to 10 min<br/>
                            <input type="radio" name="optradio" value= "{{($trip->distance  == '10' && $trip->distance  =< '10') ? 'checked' : '' }}" >10 to 20 min<br/>
                            <input type="radio" name="optradio" value= "{{$trip->distance > '20' ? 'checked' : '' }}">More than 20 min<br/>
                        </div>
                    </div>
                    @endforeach
                    <div class="button">
                        <button type="submit" class="btn btn-primary">Search</button></div>
                    </div>
                    {!!Form::close()!!}
                
                <!-- <div class="col-md-8 col-md-offset-2" id="results"></div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection