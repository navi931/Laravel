@extends('stripe')
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
      <?php
        if($reservation->is_paid == 0)
          {
       ?>
       <div class="container">
           <h2 class="my-4 test-center">Payment Test cost ${{$price}} mxn Pay now to get 10% discount </h2>
          <form action="{{route('reservations.pay')}}" method="post" id="payment-form">
             {{ csrf_field() }}
             <div id="card-element" class="form-control">
                       <!-- A Stripe Element will be inserted here. -->
                   </div>
                   <!-- Used to display form errors. -->
                   <div id="card-errors" role="alert"></div>
               </div>
               <button class="btn btn-primary btn-block mt-4">Submit Payment & make Reservation</button>
         {{ csrf_field() }}
           <input type="hidden" name="id" value="{{$reservation->id}}">
           <input type="hidden" name="price" value="{{$reservation->price}}">
         </form>
       </div>
     <?php } ?>
@endsection
