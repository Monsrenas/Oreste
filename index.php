<!doctype html>
<html lang="es">
 <?php
    session_start();
    $idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (!isset($_SESSION['idioma'])) {
      $_SESSION['idioma'] = $idioma;
      include('textos.php');
      $_SESSION['icono']= ($idioma == 'es') ? 'en.png' : 'es.png';
    }
 include('textos.php');
 header("location:inicio.php");
?>
</html>