<!doctype html>
<html lang="es">
<?php
  session_start();
  $_SESSION['pagina']="nosotros.php";
  include('logo.php');
?>  
   
  <body>
    <?php include('menu.php');?>        
        <div class="container">
          <div class="row "> 
            <div class="col-md-3  col-xs-3 notas">
                <img class="imagen" style="width: 99%;" src="imagenes\interior1.jpg">         
            </div>

            <div class="col-md-6  col-xs-12 parrafo">
              <p class="text-justify"><?php  echo $_SESSION[nosotros_izquierda];?></p>
              <p class="text-justify"><?php echo $_SESSION[nosotros_derecha];?></p>                          
              <p style="text-align: center;"><?php echo $_SESSION[nosotros_centro];?></p>
            </div>

            <div class="col-md-3  col-xs-3 notas">
             <img  style="margin 0 auto; width: 99%;" src="imagenes\interior2.jpg">   
            </div>
          </div>
        </div>
        <?php include('codigo.php'); ?>
  </body>
</html>