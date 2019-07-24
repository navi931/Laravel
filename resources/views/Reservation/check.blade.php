@extends('master')
@section('content')
    <form action="{{route('reservations.makeReservation')}}" method="post">
      {{ csrf_field() }}
      <h1>This is your reservation</h1>
      <div>Your init date is {{$start}}</div>
      <div>Your end date is {{$end}}</div>
      <div>Your init place is {{$location_start->ciudad}}</div>
      <div>Your end place is {{$location_end->ciudad}}</div>
      <div>Your category is {{$category->name}}</div>

      <input type="hidden" name="start" value="{{$start}}">
      <input type="hidden" name="end" value="{{$end}}">
      <input type="hidden" name="location_start" value="{{$location_start->id}}">
      <input type="hidden" name="location_end" value="{{$location_end->id}}">
      <input type="hidden" name="category_id" value="{{$category->id}}">
      <label for="name">Your name Please.</label>
      <input type="text" name="name" required>

      <button type="submit" name="button"> Make Reservation </button>
    </form>
@endsection
