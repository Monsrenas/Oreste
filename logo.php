  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <title>A/C CAR Orestes's</title>

  </head>
 <?php
    session_start();
    $idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (!isset($_SESSION['idioma'])) {
      $_SESSION['idioma'] = $idioma; 
      $_SESSION['icono']= "en.png";
    if ($idioma=="en") {$_SESSION['icono']="es.png";}  
      include('textos.php');
    }

 ?>