@extends('master')
@section('content')
    <form action="{{route('reservations.categoriesPersonalized')}}" method="get">

      <label for="location_start">location start</label>
      <select id="location_start" name="location_start">
        @foreach($locations as $location)
        <option value="{{$location->id}}">{{$location->ciudad}}</option>
        @endforeach
      </select>

      <label for="start">Start</label>
      <input id="start" type="date" name="start" required>

      <label for="return">Return</label>
      <input id="return" type="date" name="return" required>

      <label for="location_end">location end</label>
      <select id="location_end" name="location_end">
        @foreach($locations as $location)
        <option value="{{$location->id}}">{{$location->ciudad}}</option>
        @endforeach
      </select>

      <button type="submit">GO</button>
    </form>
@endsection
