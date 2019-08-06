@extends('master')
@section('content')
      <h1>This is your reservation id: {{$reservation->id}}</h1>
      <div>Your name is {{$name}}</div>
      <div>Your init date is {{$start}}</div>
      <div>Your end date is {{$reservation->final_date}}</div>
      <div>Your init place is {{$location_start->ciudad}}</div>
      <div>Your end place is {{$location_end->ciudad}}</div>
      <div>Your category is {{$category->name}} ${{$category->cost}} per day</div>
      <div>The price is {{$price}}</div>
      @foreach($extras as $extra)
        <div>{{$extra->name}} {{$extra->cost}} per day</div>
      @endforeach
      <form action="{{route('reservations.deleteReservation')}}" method="post">
        {{ csrf_field() }}
          <input type="hidden" name="start" value="{{$start}}">
          <input type="hidden" name="end" value="{{$reservation->final_date}}">
          <input type="hidden" name="reservation_id" value="{{$reservation->id}}">
          <button type="submit">Delete this reservation</button>
      </form>
@endsection
