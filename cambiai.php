 <?php
    session_start();
	$_SESSION['icono']=$_SESSION['idioma'].".png";
	$_SESSION['idioma']=($_SESSION['idioma']== 'es') ? 'en' : 'es';

    include('textos.php');
   	header("location:".$_SESSION['pagina']);
 ?>