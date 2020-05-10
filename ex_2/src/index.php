<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Dischi</title>
  </head>
  <body>
    <header>
      <img src="img/spotify-logo.png" alt="">

    </header>

    <main>


      <section class="section">

      </section>




      <script id="entry-template" type="text/x-handlebars-template">
        <div class="box">
          <img src="{{poster}}" alt="">
          <h1 class="titolo">{{title}}</h1>
          <h3 class="artista">{{artista}}</h3>
          <h3 class="anno">{{anno}}</h3>
        </div>
      </script>

    </main>


    <script type="text/javascript" src="app.js"></script>
  </body>
</html>
