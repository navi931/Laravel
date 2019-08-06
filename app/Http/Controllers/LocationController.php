<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Location;

class LocationController extends Controller
{
    public function index()
    {
      $locations = Location::all();
      return view('Location.index')->with('locations',$locations);
    }
    public function add()
    {
      return view('Location.add');
    }
    public function store(Request $request)
    {
      $city = $request['city'];
      $airport = $request['airport'];
      $address = $request['address'];

      $data = array('ciudad'=>$city,'is_airport'=>$airport,'direccion'=>$address);
      $location = Location::create($data);
      return redirect()->action('LocationController@index');
    }
}
