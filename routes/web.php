<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['uses'=>'AdminController@index','as'=>'admin.index']);
Route::post('/reservations',['uses'=>'AdminController@getReservations','as'=>'admin.reservations']);

Route::get('/index',['uses'=>'ReservationsController@client','as'=>'reservations.client']);
Route::post('/categories',['uses'=>'ReservationsController@categories','as'=>'reservations.categories']);
Route::post('/check',['uses'=>'ReservationsController@check','as'=>'reservations.check']);
Route::post('/makeReservation',['uses'=>'ReservationsController@makeReservation','as'=>'reservations.makeReservation']);
Route::post('/extras',['uses'=>'ReservationsController@extras','as'=>'reservations.extras']);
Route::post('/checkReservation',['uses'=>'ReservationsController@checkReservation','as'=>'reservations.checkReservation']);
Route::post('/deleteReservation',['uses'=>'ReservationsController@deleteReservation','as'=>'reservations.deleteReservation']);

Route::post('/admin',['uses'=>'AdminController@menu','as'=>'admin.menu']);



Route::get('/prueba', function () {
  $from = "stevejobs@apple.com";
  $to = "yosuts@gmail.com";//$request['email'];
  $subject = "Reservation";
  $message = "You have paid your reservation";
  // $headers = "From:" . $from;
  $message = wordwrap($message,70);
  mail($to,$subject,$message);
  if (mail($to,$subject,$message))
  {
    echo "The email message was sent to ".$to;
  }
  echo'done';
 });
 //
 Route::get('/categories',['uses'=>'CategoriesController@index','as'=>'categories.index']);
 Route::get('/categories/create','CategoriesController@create');
 Route::post('/categories/store','CategoriesController@store');
 Route::get('/categories/detail/{id}','CategoriesController@detail');
 Route::get('/categories/modify/{id}','CategoriesController@modify');
 Route::get('/categories/delete/{id}','CategoriesController@delete');
 Route::post('/categories/update/{id}','CategoriesController@update');
 Route::get('/cars',['uses'=>'CarsController@index','as'=>'cars.index']);
 Route::get('/cars/create',['uses'=>'CarsController@create','as'=>'cars.create']);
 Route::post('/cars',['uses'=>'CarsController@store','as'=>'cars.store']);

 Route::get('/locations',['uses'=>'LocationController@index','as'=>'locations.index']);
 Route::get('/locations/add',['uses'=>'LocationController@add','as'=>'locations.add']);
 Route::post('/locations/store',['uses'=>'LocationController@store','as'=>'locations.store']);

/*
*{pluralized_entity} -> GET (listados)
*{pluralized_entity} -> POST (guarda)
*{pluralized_entity}/create -> GET (formularios)
*{pluralized_entity}/{id} -> GET (detalle)
*{pluralized_entity}/{id} -> DELETE (detalle)
*/
/*
* cars/create va a carsController@create
*/
