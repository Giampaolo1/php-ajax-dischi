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
    <?php
        foreach ($database as $album) { ?>
      <h2>
        <?php echo $album["title"];?>
      </h2>
      <h3>
        <?php echo $album["author"];?>
      </h3>
      <h3>
        <?php echo $album["year"];?>
      </h3>
      <div>
        <img src=<?php echo $album["poster"];?>>
        <?php echo "<br>";?>
        <?php echo "<br>";?>
        <?php echo "-------------";;?>
      </div>
    <?php } ?>

    <img src="">

  </body>
</html>
