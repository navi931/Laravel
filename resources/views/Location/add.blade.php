@extends('master')
@section('content')
    <form action="{{route('locations.store')}}" method="post">
      {{ csrf_field() }}
      <label for="city">City</label>
      <input id="city" type="text" name="city">

      <label for="airport">Airport</label>
      <input id="airport" type="checkbox" name="airport" value="1">

      <label for="address">Address</label>
      <input id="address" type="text" name="address">

      <button type="submit">ADD</button>
    </form>
@endsection
