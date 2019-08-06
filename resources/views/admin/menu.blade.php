@extends('master')
@section('content')
    <form action="{{route('admin.reservations')}}" method="post">
      {{ csrf_field() }}
      <button type="submit">Reservations</button>
    </form>
    <form action="{{route('categories.index')}}" method="get">
      {{ csrf_field() }}
      <button type="submit" name="button">Categories</button>
    </form>
    <form action="{{route('locations.index')}}" method="get">
      {{ csrf_field() }}
      <button type="submit" name="button">Locations</button>
    </form>
@endsection
