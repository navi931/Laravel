@extends('master')
@section('content')
      <div class="title m-b-md">
        Welcome
      </div>
      <h1>Select your type of car</h1>
      <table>
        <thead>
          <th>Name</th>
          <th>Cost</th>
          <th>Vehicles</th>
        </thead>
        @foreach($categories as $c)
        <tr>
          <td class="item">{{$c->name}} </td>
          <td class="item">{{$c->cost}} </td>
        </tr>
        @endforeach
      </table>
    </body>
</html>
@endsection
