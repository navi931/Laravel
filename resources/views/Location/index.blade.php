@extends('master')
@section('content')
<style media="screen">
table, th, td {
    border: 1px solid gray;
    border-collapse: collapse;
}
</style>
      <div class="title m-b-md">
        Welcome
      </div>
      <h1>Select your type of car</h1>
      <table style="width:100%">
        <thead>
          <th>Id</th>
          <th>City</th>
          <th>is_airport</th>
          <th>Address</th>
          <th>Delete</th>
        </thead>
        @foreach($locations as $l)
        <tr>
          <td class="item"><a> {{$l->id}}</a> </td>
          <td class="item"><a> {{$l->ciudad}}</a> </td>
          <td class="item"><a> {{$l->is_airport}}</a> </td>
          <td class="item"><a> {{$l->direccion}}</a> </td>
          <td class="item">
            <form action="{{route('locations.delete')}}" method="post">
              {{ csrf_field() }}
              <button type="submit" name="id" value="{{$l->id}}">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
      <form action="{{route('locations.add')}}" method="get">
        <button type="submit">Add</button>
@endsection
<form class="" action="index.html" method="post">

</form>
