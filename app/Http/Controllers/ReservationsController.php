<?php

namespace App\Http\Controllers;
use \App\Category;
use \App\Location;
use Validator;
use App\Http\Requests\ListAvailableCategoriesRequest;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
  public function index()
  {
    $locations = Location::all();
    return view('Reservation.index')->with('locations',$locations);;
  }

  public function categoriesPersonalized(ListAvailableCategoriesRequest $request)
  {
      $maximo_datos = 10;
      $table = Category::all();
      // $table = Location::find($_GET['location_start'])->categories;
      return view('Reservation.categoriesPersonalized')->with('categories',$table);
  }
}
