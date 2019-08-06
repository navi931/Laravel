@extends('master')
@section('content')
    <form action="/categories/update/{{$category->id}}" method="post">
      {{ csrf_field() }}
      <label for="name">Name</label>
      <input id="name" type="text" name="name" value="{{$category->name}}">

      <label for="passengers">Passengers</label>
      <input id="passengers" type="text" name="passengers" value="{{$category->passengers}}">

      <label for="cost">Cost</label>
      <input id="cost" type="text" name="cost" value="{{$category->cost}}">
      <div>
        <label for="location">Location</label>
        @foreach($locations as $location)
          <input type="checkbox" name="location[]"value="{{$location->id}}" checked="checked">{{$location->ciudad}}
        @endforeach
      </div>
    <a href="/categories/delete/{{$category->id}}">Delete this record</a>
      <button type="submit">Update</button>
    </form>
@endsection
