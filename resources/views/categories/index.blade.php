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

            a {
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
          <td class="item"><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$c->name}}</a> </td>
          <td class="item"><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$c->cost}}</a> </td>
          <td class="item"><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$c->cars->count()}}</td>
        </tr>
        @endforeach
      </table>
      <a href="<?php
      if(isset($_GET['page']))
      {
        $page =$_GET['page'];
      }
      else {
        $page = 1;
      }
      $limite_inferior = 1;
      /*
      * Es para ir a la primera pagina
      */
        echo "http://localhost:8000/categories?page=1";
        ?>">Primera</a>
      <a href="<?php
      /*
      * Es para retroceder de página
      */
      if($page > $limite_inferior)
      {
        echo "http://localhost:8000/categories?page=".($page - 1);
      }
      else
      {
        echo "http://localhost:8000/categories?page=1";
      }
        ?>">Anterior</a>
      <?php
      /*
      * Es para crear los numeros de las pagina
      */
        for ($i=1; $i <= $categories->lastPage(); $i++):?>

        <a href="<?php
          echo "http://localhost:8000/categories?page=".$i;
          ?>" id="<?php
          if($i == $page)
          {
            echo "current_page";
          }
          else {
            echo "nocurrent_page";
          } ?>"><?php echo $i; ?></a>

        <?php
        endfor;
       ?>

      <a href="<?php
      /*
      * Es para controlar si podemos avanzar de pagina,si si avanzamos,si no nos quedamos
      */
      if($page < $i - 1)
      {
        echo "http://localhost:8000/categories?page=".($page + 1);
      }
      else
      {
        echo "http://localhost:8000/categories?page=".$page;
      }
        ?>">Siguiente</a>

        <a href="<?php
        /*
        * Es para avanzar a la ultima página
        */
          echo "http://localhost:8000/categories?page=".($i-1);
          ?>">Ultima</a>

      <div>
      </div>
      <a href="<?php
      /*
      * Agregar nuevo
      */
        echo "http://localhost:8000/categories/create";
        ?>">Agregar</a>
    </body>
</html>
