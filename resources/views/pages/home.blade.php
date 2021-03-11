<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>La Molisana</title>
  </head>
  <body>
    @include('product')
    <div id="root">

      <header>

        <div class="logo">
          <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="">
        </div>

        <div class="lista">
          <ul>
            <li>Home</li>
            <li>Prodotti</li>
            <li>News</li>
          </ul>
        </div>

      </header>

      <main>
        @foreach ($pastaDictionary as $key => $pasta)
          <b>{{ $key + 1}}:</b></br>
          @foreach ($pasta as $keyPasta => $text)
            {{$keyPasta}}: {{$text}} </br>
          @endforeach
        </br>
        @endforeach
      </main>



    </div>

  </body>
</html>
