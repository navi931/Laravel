<?php

namespace App\Http\Controllers;
use \App\Category;
use \App\Location;
use \App\Reservation;
use Validator;
use DateTime;
use App\Http\Requests\ListAvailableCategoriesRequest;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
  public function index()
  {
    $locations = Location::all();
    return view('Reservation.index')->with('locations',$locations);;
  }

  public function categories(ListAvailableCategoriesRequest $request)
  {
      $categories = Location::find($request['location_start'])->categories;
      return view('Reservation.categories')->with('categories',$categories)->with(
        'location_start',$request['location_start'])->with(
        'location_end',$request['location_end'])->with(
        'start',$request['start'])->with(
        'end',$request['end']);
  }
  public function check(Request $request)
  {
    $location_start = Location::find($request['location_start']);
    $location_end = Location::find($request['location_end']);
    $category = Category::find($request['category_id']);
    $start = new DateTime($request['start']);
    $end = new DateTime($request['end']);
    $days = date_diff($start, $end)->days;
    $price = $days * $category->cost;
    return view('Reservation.check')->with('category',$category)->with(
      'location_start',$location_start)->with(
      'location_end',$location_end)->with(
      'start',$request['start'])->with(
      'end',$request['end'])->with(
      'price',$price);
  }
  public function makeReservation(Request $request)
  {

    $category = Category::find($request['category_id']);
    $reservation = Reservation::create([
        'name' => $request['name'],
        'category_id' => $request['category_id'],
        'init_place' => $request['location_start'],
        'final_place' => $request['location_end'],
        'init_date' => $request['start'],
        'final_date' => $request['end'],
        'price' => $request['price'],
    ]);

    $location_start = Location::find($request['location_start']);
    $location_end = Location::find($request['location_end']);
    return view('Reservation.makeReservation')->with('category',$category)->with(
      'location_start',$location_start)->with(
      'location_end',$location_end)->with(
      'start',$request['start'])->with(
      'end',$request['end'])->with(
      'reservation',$reservation)->with(
      'name',$request['name'])->with(
      'price',$request['price']);
  }
}
