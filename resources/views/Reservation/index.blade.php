@extends('master')
@section('content')
    <form action="{{route('reservations.client')}}" method="post">
      {{ csrf_field() }}
      <button type="submit">Client</button>
    </form>
    <form action="{{route('categories.index')}}" method="get">
      {{ csrf_field() }}
      <button type="submit" name="button">Administrator</button>
    </form>
@endsection
