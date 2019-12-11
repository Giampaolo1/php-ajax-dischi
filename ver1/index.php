<!-- Stampare a schermo una decina di dischi musicali
(vedi screenshot) in due modi diversi:

VER 1:

- Solo con l'utilizzo di PHP, che stampa
direttamente i dischi in pagina: al caricamento
della pagina ci saranno tutti i dischi.

VER 2:

- Attraverso l'utilizzo di AJAX: al caricamento
della pagina ajax chiederà attraverso una
chiamata i dischi a php e li stamperà
attraverso handlebars.

Utilizzare: Html, Sass, JS, jQuery, handlebars, Php
Opzionale:
- Attraverso un'altra chiamata ajax, filtrare gli
album per artista -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">

    <title>JP php-ajax Dischi 1</title>

    <?php
      include "data.php";
    ?>

  </head>
  <body>
    <div class="container">
      <?php
        foreach ($database as $album) { ?>
        <div class="album">
          <div class="img">
            <img src=<?php echo $album["poster"];?>>
          </div>
          <div class="testo">
            <h3>
            <?php echo $album["title"];?>
            </h3>
            <h4>
            <?php echo $album["author"];?>
            </h4>
            <h5>
            <?php echo $album["year"];?>
            </h5>
          </div>
        </div>
      <?php } ?>

    </div>
  </body>
</html>
