<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>La Molisana</title>
  </head>
  <body>

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

        <div class="container">

          <h2>Le lunghe</h2>

          <div class="pasta">
            @foreach ($pastaArray as $key => $item)
              @if ($item['tipo'] === 'lunga')
                <a href="/product/{{ $key }}"><img src="{{ $item['src'] }}" alt=""></a>
              @endif
            @endforeach
          </div>


          <h2>Le corte</h2>

          <div class="pasta">
            @foreach ($pastaArray as $key => $item)
              @if ($item['tipo'] === 'corta')
                <a href="/product/{{ $key }}"><img src="{{ $item['src'] }}" alt=""></a>
              @endif
            @endforeach
          </div>


          <h2>Le cortissime</h2>

          <div class="pasta">
            @foreach ($pastaArray as $key => $item)
              @if ($item['tipo'] === 'cortissima')
                <a href="/product/{{ $key }}"><img src="{{ $item['src'] }}" alt=""></a>
              @endif
            @endforeach
          </div>

        </div>

      </main>

      <footer>
        <div class="container">
          <ul>
            <li>
              <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="">
            </li>
            <li>RAGIONE SOCIALE: LA MOLISANA S.P.A.</li>
            <li>SEDE LEGALE: CONTRADA COLLE DELLE API, 100/A</li>
            <li>86100 - CAMPOBASSO (CB)</li>
            <li>PEC: LAMOLISANA@PEC.IT</li>
            <li>TEL: +39 0874 4981</li>
            <li>FAX: +39 0874 629584</li>
            <li>PER SEGNALAZIONI SCRIVERE A:</li>
            <li>INFO@LAMOLISANA.IT</li>
            <li>PER CONTATTARE L'AREA COMMERCIALE:</li>
            <li>COMMERCIALE@LAMOLISANA.IT</li>
            <li>PER CONTATTARE L'AREA EXPORT:</li>
            <li>EXPORT@LAMOLISANA.IT</li>
            <li>DATI AZIENDALI: LEGGI DI PIÙ</li>
          </ul>
          <ul>
            <li><h3>PASTIFICIO</h3></li>
            <li>Il Pastificio</li>
            <li>Grano decorticato a pietra</li>
            <li>Il Molise c’è</li>
            <li>Filiera Integrata</li>
            <li>100 anni di pasta</li>
            <li>Sartoria della pasta</li>
            <li>Spaghetto Quadrato</li>
            <li>Le Persone</li>

            <li><h3>PRODOTTI</h3></li>
            <li>Le Classiche</li>
            <li>Le Integrali</li>
            <li>Le Speciali</li>
            <li>Le Biologiche</li>
            <li>Le Gluten-Free</li>
            <li>Le Semole</li>
            <li>Le Extra di Lusso</li>
          </ul>

          <ul>
            <li><h3>COLLEZIONE DA CHEF</h3></li>
            <li>Collezione da Chef</li>
            <li>Grandi Cucine</li>
            <li>Biologiche</li>
            <li>Quadrate</li>
          </ul>
        </div>
        <img id="mountain" src="https://www.lamolisana.it/wp-content/uploads/2020/06/footer-montagne-bottom.jpg" alt="">
      </footer>

    </div>

  </body>
</html>
