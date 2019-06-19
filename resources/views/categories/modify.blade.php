<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>


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

              td,a,button {
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
    <form action="/categories/update/{{$category->id}}" method="post">
      {{ csrf_field() }}
      <label for="name">Name</label>
      <input id="name" type="text" name="name" value="{{$category->name}}">

      <label for="passengers">Passengers</label>
      <input id="passengers" type="text" name="passengers" value="{{$category->passengers}}">

      <label for="cost">Cost</label>
      <input id="cost" type="text" name="cost" value="{{$category->cost}}">
      <button type="submit">Update</button>
    </form>
  <a href="/categories/detail/{{$category->id}}">Back</a>
  <a href="/categories/delete/{{$category->id}}">Delete this record</a>

  </body>
</html>
