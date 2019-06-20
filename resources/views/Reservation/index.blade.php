<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style>
      html, body {
          background-color: #fff;
          font-family: 'Raleway', sans-serif;
          font-weight: 100;
          height: 100vh;
          margin: 0;
      }
      .item{
        color:black;
        font-weight: 10000;
      }

      .full-height {
          height: 100vh;
      }


      .position-ref {
          position: relative;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
      }

      .content {
          text-align: center;
      }

      .title {
          font-size: 84px;
      }

      a,label,button {
          color: #636b6f;
          padding: 0 25px;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }
  </style>
  <body>
    <form action="{{route('reservations.categoriesPersonalized')}}" method="get">

      <label for="location_start">location start</label>
      <select id="location_start" name="location_start">
        @foreach($locations as $location)
        <option value="{{$location->id}}">{{$location->ciudad}}</option>
        @endforeach
      </select>

      <label for="start">Start</label>
      <input id="start" type="date" name="start" required>

      <label for="return">Return</label>
      <input id="return" type="date" name="return" required>

      <label for="location_end">location end</label>
      <select id="location_end" name="location_end">
        @foreach($locations as $location)
        <option value="{{$location->id}}">{{$location->ciudad}}</option>
        @endforeach
      </select>

      <button type="submit">GO</button>
    </form>

  </body>
</html>
