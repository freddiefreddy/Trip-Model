<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tripsearches');
    }
    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
  
    }
    
    public function details($id)
    {
        //show trip details
        $tripdetails = Trip::findorfail($id);
        // Trip::add($id,$post->name,$post->title,$post->price);
        return view('tripdetails')->with('tripdetails', $tripdetails);
    }


    public function search(Request $request)
    {

    $q = $request->q;
    if ($q != " "){
        
        $trips = Trip::where('pickup_location','LIKE','%'.$q.'%')
                ->orWhere('dropoff_location','LIKE','%'.$q.'%')
                ->orWhere('car_make','LIKE','%'.$q.'%')
                ->orWhere('driver_name','LIKE','%'.$q.'%')
                ->orWhere('type','LIKE','%'.$q.'%')
                ->orWhere('car_model','LIKE','%'.$q.'%')
                ->orWhere('car_number','LIKE','%'.$q.'%')
                ->get();

        // dd($trips);
        
        if(count($trips) > 0){
            return view("tripsearchresults", compact('trips'))->withQuery($q);
        }
        
        else return view ('tripsearchresults')->withMessage('No Details found. Try to search again !');
        

    }

    return view("tripsearchresults")->withMessage("No Found!");
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }
    // public function store(Request $request)
    // {
        
    // }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
