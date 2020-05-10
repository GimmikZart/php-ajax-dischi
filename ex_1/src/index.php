<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js">
    </script>
    <script type="text/javascript" src="app.js">
    </script>

    <?php
      include "database.php";
     ?>
    <title>Dischi</title>
  </head>
  <body>
    <header>
      <img src="img/spotify-logo.png" alt="">

    </header>

    <main>
      <section>
        <?php
            foreach ($db as $disco){
         ?>

          <div class="box">
            <img src="<?php echo $disco["poster"];?>" alt="">
            <h1 class="titolo"><?php echo $disco["title"];?></h1>
            <h3 class="artista"><?php echo $disco["author"];?></h3>
            <h3 class="anno"><?php echo $disco["year"];?></h3>
          </div>

        <?php } ?>

      </section>



    </main>



  </body>
</html>
