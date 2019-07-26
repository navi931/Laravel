@extends('master')
@section('content')
    <form action="{{route('reservations.categories')}}" method="post">
      {{ csrf_field() }}
      <label for="location_start">location start</label>
      <select id="location_start" name="location_start">
        @foreach($locations as $location)
        <option value="{{$location->id}}">{{$location->ciudad}}</option>
        @endforeach
      </select>

      <label for="start">Start</label>
      <input id="start" type="date" name="start" required>

      <label for="end">Return</label>
      <input id="end" type="date" name="end" required>

      <label for="location_end">location end</label>
      <select id="location_end" name="location_end">
        @foreach($locations as $location)
        <option value="{{$location->id}}">{{$location->ciudad}}</option>
        @endforeach
      </select>

      <button type="submit">GO</button>
    </form>
    <form action="{{route('reservations.checkReservation')}}" method="post">
      {{ csrf_field() }}
      <label for="id_check">Id reservation</label>
      <input type="text" name="id_check" required>
      <label for="name">Name</label>
      <input type="text" name="name" required>
      <button type="submit" name="button"> Check reservation</button>
    </form>
@endsection
