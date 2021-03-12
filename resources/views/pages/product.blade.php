

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    {{$idProduct}}
    <br>
    {{ $pastaArray[$idProduct]['titolo']}}
    <br>
    {{ $pastaArray[$idProduct]['tipo']}}
    <br>
    {{ $pastaArray[$idProduct]['cottura']}}
    <br>
    {{ $pastaArray[$idProduct]['peso']}}
    <br>
    {!! $pastaArray[$idProduct]['descrizione'] !!}

  </body>
</html>
