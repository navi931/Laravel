@extends('master')
@section('content')
    <form action="{{route('reservations.client')}}" method="get">
      {{ csrf_field() }}
      <button type="submit">Client</button>
    </form>
    <form action="{{route('admin.menu')}}" method="post">
      {{ csrf_field() }}
      <button type="submit" name="button">Administrator</button>
    </form>
@endsection
