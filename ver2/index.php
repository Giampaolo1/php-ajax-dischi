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

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>

    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="template" type="text/x-handlebars-template">
      <div class="album">
        <p>{{title}}: {{}}</p>
        <p>{{author}}: {{}}</p>
        <p>{{year}}:</p>
        <p>{{poster}}:</p>
      </div>
    </script>

    <title>JP php-ajax Dischi 2</title>

    <?php
      include "data.php";
    ?>

  </head>
  <body>

    <div class="container">

    </div>


    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
  </body>
</html>
