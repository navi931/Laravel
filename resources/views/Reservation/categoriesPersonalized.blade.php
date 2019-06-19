<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

            td {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
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
          <td class="item">{{$c->cars->count()}}</td>
        </tr>
        @endforeach
      </table>
    </body>
</html>
