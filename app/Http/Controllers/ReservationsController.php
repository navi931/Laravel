<?php

namespace App\Http\Controllers;
use \App\Category;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
  public function index()
  {
    return view('Reservation.index');
  }

  public function categoriesPersonalized()
  {
    if (isset($_GET['start']))
    {}
    $maximo_datos = 10;
    $table = Category::paginate($maximo_datos);
    return view('Reservation.categoriesPersonalized')->with('categories',$table);
  }
}
