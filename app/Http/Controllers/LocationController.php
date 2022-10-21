<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        return view('locations',[
            "title"=>"Locations",
            "locations"=>Location::orderBy('location_category_id', 'asc')->get() //database:query builder
        ]);
    }

    public function show(Location $location)
    {
        return view('location', [
            "title"=>"Single Location",
            "location"=>$location
        ]);
    }

    
}
