@extends('master')
@section('content')
      <h1>This is your reservation id: {{$reservation->id}}</h1>
      <div>Your name is {{$name}}</div>
      <div>Your init date is {{$start}}</div>
      <div>Your end date is {{$end}}</div>
      <div>Your init place is {{$location_start->ciudad}}</div>
      <div>Your end place is {{$location_end->ciudad}}</div>
      <div>Your category is {{$category->name}}</div>
      <div>The price is {{$price}}</div>
      @foreach($extras as $extra)
        <div>{{$extra->name}} {{$extra->cost}} per day</div>
      @endforeach
@endsection